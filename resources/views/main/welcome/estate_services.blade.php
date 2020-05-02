<!-- estate services -->
<div class="ser-marketing">
    <div class="container">
             <div class="all-titles"> <h2> الخدمات العقارية <img src="{{ url('main/images/estate.png') }}"> </h2> <p></p> <a href="#"></a> </div>
        <div class="items-marketing">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($pages[4]->children as $child)
                        <div class="item-mark">
                            <div class="desk-item-mark col-md-3 col-sm-4 col-xs-6">
                                <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="#more" class="btnmore red-color"> ... عرض المزيد <i class="fas fa-plus"></i> </a>
    </div>
</div>