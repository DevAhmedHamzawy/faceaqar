<!-- services of website -->
<div class="servic-title">
    <div class="container">
        <h1> خدمات موقع واجهة العقار الالكتروني</h1>
    </div>
</div>

<!-- services marketing -->
<div class="ser-marketing">
    <div class="container">
        <div class="all-titles">
            <h2> الخدمات التسويقية الالكترونية <img src="{{ url('main/images/sermark.png') }}"> </h2> <p></p>
            <a href="#"> </a>
        </div>
        <div class="items-marketing">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-mark">
                        <div class="tit-item-mark">
                            <img src="{{ $pages[0]->icon_path }}">
                            <h2> {{ $pages[0]->title }} </h2>
                            <p>{{ str_limit($pages[0]->body, 100) }}</p>
                            <a href="{{ route('pages.show-page', $pages[0]->id) }}">... اقرأ المزيد</a>
                        </div>
                        <div class="desk-item-mark">
                           @foreach ($pages[0]->children as $child)
                                <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                           @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-mark">
                        <div class="tit-item-mark">
                            <img src="{{ $pages[1]->icon_path }}">
                            <h2> {{ $pages[1]->title }} </h2>
                            <p>{{ str_limit($pages[1]->body, 100) }}</p>
                            <a href="{{ route('pages.show-page', $pages[1]->id) }}">... اقرأ المزيد</a>
                        </div>
                        <div class="desk-item-mark">
                           @foreach ($pages[1]->children as $child)
                                <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                           @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-mark">
                        <div class="tit-item-mark">
                            <img src="{{ $pages[2]->icon_path }}">
                            <h2> {{ $pages[2]->title }} </h2>
                            <p>{{ str_limit($pages[2]->body, 100) }}</p>
                            <a href="{{ route('pages.show-page', $pages[2]->id) }}">... اقرأ المزيد</a>
                        </div>
                        <div class="desk-item-mark">
                           @foreach ($pages[2]->children as $child)
                                <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                           @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="item-mark">
                        <div class="tit-item-mark">
                            <img src="{{ $pages[3]->icon_path }}">
                            <h2> {{ $pages[3]->title }} </h2>
                            <p>{{ str_limit($pages[3]->body, 100) }}</p>
                            <a href="{{ route('pages.show-page', $pages[3]->id) }}">... اقرأ المزيد</a>
                        </div>
                        <div class="desk-item-mark">
                           @foreach ($pages[3]->children as $child)
                                <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>