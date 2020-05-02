<!-- goverment services -->
<div class="ser-marketing">
    <div class="container">
        <div class="all-titles">
            <h2> الخدمات الحكومية الالكترونية <img src="{{ url('main/images/gover.png') }}"> </h2>
            <p></p>
            <a href="#"></a>
        </div>
        <div class="items-marketing">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="item-mark item-gover">
                                <div class="tit-item-mark">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="{{ $pages[4]->icon_path }}">
                                            <h2> {{ $pages[4]->title }} </h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <p>{{ str_limit($pages[4]->body, 100) }}</p>
                                            <a href="{{ route('pages.show-page', $pages[4]->id) }}">... اقرأ المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @foreach ($pages[4]->children as $child)
                                <div class="item-mark">
                                    <div class="desk-item-mark col-md-6 col-xs-12">
                                        <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="item-mark item-gover">
                                <div class="tit-item-mark">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="{{ $pages[5]->icon_path }}">
                                            <h2> {{ $pages[5]->title }} </h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <p>{{ str_limit($pages[5]->body, 100) }}</p>
                                            <a href="{{ route('pages.show-page', $pages[5]->id) }}">... اقرأ المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @foreach ($pages[4]->children as $child)
                                <div class="item-mark">
                                    <div class="desk-item-mark col-md-6 col-xs-12">
                                        <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#more" class="btnmore red-color"> ... عرض المزيد <i class="fas fa-plus"></i> </a>
    </div>
</div>