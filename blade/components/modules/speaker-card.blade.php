<div class="speaker-card{{ isset($style) && $style === 'blue' ? ' --blue' : '' }}{{ isset($style) && $style === 'purple' ? ' --purple' : '' }}" data-speaker-card>
    <div class="speaker-card__head">
        <div class="speaker-card__photo-wrapper">
            @if(!empty($photo))
                <img class="speaker-card__photo" src="{{ $photo }}" alt="{{ !empty($name) ? $name : '' }}">
            @else
                <img class="speaker-card__photo" src="/dist/img/modules/speaker-card/no-photo.svg" alt="">
            @endif
        </div>

        @if(!empty($info) && is_array($info))
            <div class="circle-icon speaker-card__info-icon" data-dropdown='{ "trigger": "click", "position": "right-bottom", "width": 330, "interactive": true, "style": "dark" }'>
                <span class="icon"><svg><use xlink:href="#info-24x"></use></svg></span>

                <div data-dropdown-content>
                    @if(!empty($info['achieves']) && is_array($info['achieves']))
                        <div style="margin-bottom: 10px;">
                            <div class="text-label">Достижения:</div>

                            @foreach($info['achieves'] as $key => $value)
                                <div style="margin-bottom: 8px;">
                                    <img class="-valign-middle" src="/dist/img/achieves/{{ $key }}.svg" alt="">
                                    <span class="-valign-middle">{{ $value }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if(!empty($info['antiAchieves']) && is_array($info['antiAchieves']))
                        <div style="margin-bottom: 10px;">
                            <div class="text-label">Антидостижения:</div>

                            @foreach($info['antiAchieves'] as $key => $value)
                                <div>
                                    <img class="-valign-middle" src="/dist/img/anti-achieves/{{ $key }}.svg" alt="">
                                    <span class="-valign-middle">{{ $value }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if(!empty($info['languages']) && is_array($info['languages']))
                        <div style="margin-bottom: 10px;">
                            <div class="text-label">Материал на языках:</div>

                            <div class="group">
                                <div class="group__wrapper">
                                    @foreach($info['languages'] as $key => $value)
                                        <div class="group__item">
                                            <img class="-valign-middle" src="/dist/img/languages/{{ $key }}.png" alt="" style="width: 32px;"><span class="-valign-middle">{{ $value }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($info['themes']))
                        <div style="margin-bottom: 10px;">
                            <div class="text-label">Темы спикера:</div>
                            <div>{{ $info['themes'] }}</div>
                        </div>
                    @endif

                    @if(!empty($info['whom']))
                        <div style="margin-bottom: 10px;">
                            <div class="text-label">Для кого:</div>
                            <div>{{ $info['whom'] }}</div>
                        </div>
                    @endif

                    @if(!empty($info['materials']) && is_array($info['materials']))
                        <div style="margin-bottom: 10px;">
                            <div class="text-label">Дополнительно:</div>

                            <div class="group">
                                <div class="group__wrapper">
                                    @foreach($info['materials'] as $key => $value)
                                        <?
                                        $icon = '';

                                        switch ($key) {
                                            case 'videos':
                                                $icon = 'video-16x';
                                                break;

                                            case 'articles':
                                                $icon = 'article-16x';
                                                break;

                                            case 'audio':
                                                $icon = 'audio-16x';
                                                break;

                                            case 'events':
                                                $icon = 'online-events-16x';
                                                break;
                                        }
                                        ?>

                                        <div class="group__item">
                                            <div class="tag --small --primary">
                                                <span class="icon"><svg><use xlink:href="#{{ $icon }}"></use></svg></span>
                                            </div>

                                            <span class="-valign-middle">{{ $value }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <div class="speaker-card__body">
        <div class="speaker-card__tags">
            <div class="group">
                <div class="group__wrapper">
                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#star-16x"></use></svg></span>
                            @if(!empty($rating))
                                <span>{{ $rating }}</span>
                            @else
                                <span style="padding: 0 7px;">-</span>
                            @endif
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --dark">
                            <span class="icon"><svg><use xlink:href="#online-events-16x"></use></svg></span>
                            <span>Ведет онлайн</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(!empty($name))
            <a class="speaker-card__name" href="javascript:void(0);" data-speaker-card-name>{{ $name }}</a>
        @endif

        @if(!empty($description))
            <div class="speaker-card__description" data-speaker-card-description>{{ $description }}</div>
        @endif

        @if(!empty($achieves) && is_array($achieves) || !empty($antiAchieves) && is_array($antiAchieves))
            <div class="speaker-card__achieves">
                @if(!empty($achieves))
                    <div class="group">
                        <div class="group__wrapper">
                            @for($i = 0; $i < (count($achieves) <= 4 ? count($achieves) : 4); $i++)
                                <div class="group__item">
                                    <img class="-d-block" src="/dist/img/achieves/{{ $achieves[$i] }}.svg" alt="">
                                </div>
                            @endfor

                            @if(count($achieves) > 4)
                                <div class="group__item -d-flex -align-items-center">
                                    <span class="-color-link">+{{ count($achieves) - 4 }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if(!empty($antiAchieves))
                    <div class="group -ml-auto">
                        <div class="group__wrapper">
                            <div class="group__item">
                                <img class="-d-block" src="/dist/img/anti-achieves/{{ $antiAchieves[0] }}.svg" alt="">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        @if(!empty($languages) && is_array($languages))
            <div class="group">
                <div class="group__wrapper">
                    @for($i = 0; $i < count($languages); $i++)
                        <div class="group__item">
                            <img class="-d-block" src="/dist/img/languages/{{ $languages[$i] }}.png" alt="" style="width: 32px;">
                        </div>
                    @endfor
                </div>
            </div>
        @endif

        <div class="speaker-card__bottom">
            <a href="javascript:void(0);">Подробнее</a>
        </div>
    </div>
</div>
