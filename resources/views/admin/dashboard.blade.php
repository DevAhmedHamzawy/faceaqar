@extends('admin.layouts.app')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            {!! $estateAddingByMonth->container() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 my-3">
            <div class="bg-mattBlackLight p-3">
              <h4 class="mb-2">Client</h4>
              <div>{!! $usersByMonth->container() !!}</div>
            </div>
        </div>

        <div class="col-md-4 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2">Client</h4>
            <div>{!! $officesByMonth->container() !!}</div>
          </div>
        </div>

      <div class="col-md-4 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2">Client</h4>
          <div>{!! $lawyersByMonth->container() !!}</div>
        </div>
      </div>

    </div>


    <div class="row">
        <div class="col-md-3">
            <div class="card-counter primary">
            <i class="material-icons icon">person</i>
            <span class="count-numbers">{{ $countEstates }}</span>
            <span class="count-name">عدد العقارات</span>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card-counter danger">
            <i class="material-icons icon">track_changes</i>
            <span class="count-numbers">{{ $countUsers }}</span>
            <span class="count-name">عدد المستخدمين</span>
            </div>
            </div>
            <div class="col-md-3">
            <div class="card-counter info">
            <i class="material-icons icon">collections</i>
            <span class="count-numbers">{{ $countOffices }}</span>
            <span class="count-name">عدد المكاتب العقارية</span>
            </div>
            </div>
            
            <div class="col-md-3">
            <div class="card-counter success">
            <i class="material-icons icon">content_copy</i>
            <span class="count-numbers">{{ $countLawyers }}</span>
            <span class="count-name">عدد المحامين</span>
            </div>
            </div>
    
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-6 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2">Client</h4>
            <div>{!! $countPremiumChart->container() !!}</div>
          </div>
      </div>

      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2">Client</h4>
          <div>{!! $countDurationChart->container() !!}</div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-6 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2">Client</h4>
            <div>{!! $countOfferChart->container() !!}</div>
          </div>
      </div>

      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2">Client</h4>
          <div>{!! $countSortChart->container() !!}</div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-6 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2">Client</h4>
            <div>{!! $countAdSortChart->container() !!}</div>
          </div>
      </div>

      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2">Client</h4>
          <div>{!! $countCategoryChart->container() !!}</div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2">Client</h4>
            <div>{!! $topFiveUsersChart->container() !!}</div>
          </div>
      </div>

      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2">Client</h4>
          
        </div>
      </div>
    </div>
  

</div>


@endsection

@section('footer')
{!! $estateAddingByMonth->script() !!}
{!! $usersByMonth->script() !!}
{!! $officesByMonth->script() !!}
{!! $lawyersByMonth->script() !!}
{!! $countPremiumChart->script() !!}
{!! $countDurationChart->script() !!}
{!! $countSortChart->script() !!}
{!! $countAdSortChart->script() !!}
{!! $countOfferChart->script() !!}
{!! $countCategoryChart->script() !!}
{!! $topFiveUsersChart->script() !!}

@endsection