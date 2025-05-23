@extends('partials.dashboard.master')
@section('content')
    <!-- begin :: Subheader -->
    <div class="toolbar">

        <div class="container-fluid d-flex flex-stack">

            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                <!-- begin :: Title -->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"><a
                        href="{{ route('dashboard.news.index') }}"
                        class="text-muted text-hover-primary">{{ __('partners') }}</a></h1>
                <!-- end   :: Title -->

                <!-- begin :: Separator -->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!-- end   :: Separator -->

                <!-- begin :: Breadcrumb -->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!-- begin :: Item -->
                    <li class="breadcrumb-item text-muted">
                        {{ __('Add new partner') }}
                    </li>
                    <!-- end   :: Item -->
                </ul>
                <!-- end   :: Breadcrumb -->

            </div>

        </div>

    </div>
    <!-- end   :: Subheader -->

    <div class="card">
        <!-- begin :: Card body -->
        <div class="card-body p-0">
            <!-- begin :: Form -->
            <form action="{{ route('dashboard.partners.update', ['partner' => $partner->id]) }}" class="form"
                method="post" id="submitted-form" data-success-message="{{ __('Partner edit successfully') }}"
                data-redirection-url="{{ route('dashboard.partners.index') }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- begin :: Card header -->
                <div class="card-header d-flex align-items-center">

                    <div class="card-title">
                        <h3 class="fw-bolder text-dark">{{ __('edit partner') }}</h3>
                    </div>



                </div>
                <!-- end   :: Card header -->

                <!-- begin :: Inputs wrapper -->
                <div class="inputs-wrapper">
                    {{--  @dd($partner->full_image_path)  --}}

                    <!-- begin :: Row -->
                    <div class="row mb-10">
                        <!-- begin :: Column -->
                        <div class="col-md-12 fv-row d-flex justify-content-evenly">
                            <div class="d-flex flex-column align-items-center">
                                <!-- begin :: Upload image component -->
                                <label class="required text-center fw-bold mb-4">{{ __('Image') }}</label>
                                <div>
                                    <x-dashboard.upload-image-inp name="image" :image="$partner->image" directory="Partners"
                                        placeholder="default.jpg" type="editable"></x-dashboard.upload-image-inp>
                                </div>
                                <p class="invalid-feedback" id="image"></p>
                                <!-- end   :: Upload image component -->
                            </div>
                        </div>
                        <!-- end   :: Column -->
                    </div>
                    <!-- end   :: Row -->
                </div>
                <!-- end   :: Inputs wrapper -->
                <!-- begin :: Form footer -->
                <div class="form-footer">

                    <!-- begin :: Submit btn -->
                    <button type="submit" class="btn btn-primary" id="submit-btn">

                        <span class="indicator-label">{{ __('Save') }}</span>

                        <!-- begin :: Indicator -->
                        <span class="indicator-progress">{{ __('Please wait ...') }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        <!-- end   :: Indicator -->

                    </button>
                    <!-- end   :: Submit btn -->

                </div>
                <!-- end   :: Form footer -->
            </form>
            <!-- end   :: Form -->
        </div>
        <!-- end   :: Card body -->
    </div>
@endsection
