<x-app-layout>


    <!-- Wrapper -->
    <div class="wrapper">

        <div class="container">
            <div class="row">

                @include('includes.sidebar')


                <!-- Content -->
                <div class="col-lg-9">

                    <div class="content-box content-box_background-white">
                        <!-- Breadcrumbs -->
                        <ul class="breadcrumbs d-flex">
                            <li class="breadcrumbs__item">
                                <a href="/" class="breadcrumbs__link">
                                    Система SMOService
                                </a>
                            </li>
                            <li class="breadcrumbs__item breadcrumbs__item_end">
                                Регистрация
                            </li>
                        </ul>
                        <!-- Profile -->
                        <h1 class="headline d-flex justify-content-between aline-items-center">
                            Пройти регистрацию
                        </h1>

                        <x-jet-validation-errors class="mb-4" />

                        <form method="post" action="{{ route('register') }}" class="privat-form mb-5">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="fas fa-user-alt"></i>
                        </span>
                                </div>
                                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="{{ __('Name') }}" />
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fas fa-at"></i>
                                </span>
                                </div>
                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="{{ __('Email') }}" />
                            </div>


                            <!-- Item -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fas fa-lock-open"></i>
                                </span>
                                </div>
                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}" />
                            </div>
                            <small id="passwordHelp" class="form-text text-muted  ml-3 mb-3">
                                Пароль должен иметь не менее 8 символов.
                            </small>
                            <!-- Item -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                                </span>
                                </div>
                                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif


                            <!-- Buttons -->
                            <div class="personal__button text-center">
                                <button type="submit" class="btn btn-primary mr-3">Зарегистрироваться</button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
        </div>
    </div>



</x-app-layout>
