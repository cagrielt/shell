@php

$categories = app()->getLocale() == "tr" ? config('app.boardMemberCategories') : config('app.boardMemberCategoriesEn');

@endphp

@foreach($categories as $key => $value)
    @php
        $members = $boardMembers->where('category',$key);
        $counter = 0;
    @endphp

    @if($members->count() > 0)
        <h1 class="section-title"><span>{{ $value }}</span></h1>

        <div class="row" style="margin-bottom: 32px;">
            @foreach($members as $boardMember)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="team-block">
                        <div class="image-holder">
                            @if($boardMember->media)
                                {!! IMG($boardMember->media,"board-member") !!}
                            @else
                                <span class="user-icon"></span>
                            @endif
                            @if($boardMember->content || $boardMember->facebook || $boardMember->twitter || $boardMember->instagram || $boardMember->linkedin)
                                <ul class="contact-box">
                                    @if($boardMember->content)
                                        <li class="resume">
                                            <span><a href="{{ boardMemberUrl($boardMember) }}"><i class="fa fa-info"></i></a></span>
                                            <div class="resume-tooltip">{{ __('global.view_cv') }}</div>
                                        </li>
                                    @endif
                                    @if($boardMember->facebook || $boardMember->twitter || $boardMember->instagram || $boardMember->linkedin)
                                        <li class="social-links">
                                            <span><i class="fa fa-share-alt"></i></span>
                                            <ul class="list">
                                                @if($boardMember->facebook)
                                                    <li><a href="{{ $boardMember->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                @endif
                                                @if($boardMember->twitter)
                                                    <li><a href="{{ $boardMember->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                @endif
                                                @if($boardMember->instagram)
                                                    <li><a href="{{ $boardMember->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                @endif
                                                @if($boardMember->linkedin)
                                                    <li><a href="{{ $boardMember->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            @endif
                        </div>
                        <div class="content-holder">
                            <h3>{{ $boardMember->name }}</h3>
                            <span class="subtitle">{{ $boardMember->position }}</span>
                        </div>
                    </div>
                </div>
                @if($key == 3 && $counter == 1)
                    <div class="col-12"></div>
                @endif
                @php $counter++; @endphp
            @endforeach
        </div>
    @endif

    
@endforeach