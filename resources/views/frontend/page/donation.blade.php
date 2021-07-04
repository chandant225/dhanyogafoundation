<x-app-layout>
    <x-slot name="siteTitle">
        {{ __('Donation') }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            {{ __('Donation') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto">
        <div class="py-5 px-4">
            <section class="max-w-screen-xl mx-auto py-10 px-4">
                <div class="border-l-8 border-primary pl-8 py-5 mb-8">
                    <p>There is this unexpressed feeling when you extend your helping hand for others. The pleasure cannot be explained but those who donate can understand that awesome feeling! To touch our daily lives you can become a monthly donor, support us through minimal monthly donation(s), to take care of the day to day necessities of innocent under-privileged.</p>
                </div>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        1. Online
                    </x-slot>
                    <x-slot name="content">
                        Online donation is the best way to make a donation to support our program. You can donate online safely and securely online via PayPal / credit cards (master, visa, discover, and American Express). </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        2. Donation via check
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose">
                            <p>You can write check to:</p>
                            <p>
                                <address>Dhana Yoga Foundation Inc</address>
                                <address>3 Nicole way,</address>
                                <address>Dartmouth, MA</address>
                            </p>
                            <p>
                                Please download our email format available in donation form and send it to DYF in the following address. Please write check payable to Dhana Yoga Foundation Inc.
                            </p>
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        3. Donate by wire transfer
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            You may donate via wire transfer directly through the bank. Please email <a href="mailto:{{ appSettings('email') }}" class="text-primary hover:underline hover:text-secondary">{{ appSettings('email') }}</a> for account details.
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        4. Vehicle donation
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            A free, convenient service for converting that extra car, truck, or RV into a tax-deductible donation to benefit DYF! You can donate online or by calling 774-377-5112. Donate your vehicle online -Once clicked it will take to the vehicle donation website. DYF is not able to register at present but this is <a href="https://www.v-dac.com/non-profits/login" target="_blank">https://www.v-dac.com/non-profits/login</a>
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        5. Donate Stocks
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            <p>
                                As you may be thinking of ways to donate one such advantageous way is through the stock and securities donations. The Securities which are having appreciated value will have much impact. The capital gain tax on the amount of appreciation can be side-stepped therefore makes you entitled to avail an income tax deduction for the full appreciated value of these securities. The Dhana Yoga Foundation will receive the full value of these donated securities’. (Please Note – The deductions are subject to certain limitations.)
                            </p>
                            <p>
                                All you got to do is to take a printout of the stock and securities donation form and provide it to your broker, rest he will do the needful. We will really appreciate if you can inform us in advance as you are making the securities and stock donations, so that we can express gratitude in an appreciative manner to you, for your generosity.
                            </p>
                            <h4 class="text-lg font-semibold">Employer matching:</h4>
                            <p>Happiness gets many folds as you share it with others. This can happen officially too, yes, now your employer can also join in your good Karma! Yes, a lot of employers and organizations are having a policy of matching gift programs. Under this, they will try to match the amount of charitable contributions made by their employees. This amount can be made equal to what employee is paying or it can be doubled, or even multiplied by the employee’s organisation. Companies even match gifts made by retirees and/or spouses too! This is a wonderful gesture by the organizations to encourage their employees to donate and serve humanity, by whatever amount they want to! </p>
                            <p>Our advice to the employee who is willing/ planning to donate must first connect with their organization’s HR department so that they can find out the best way to donate under the company’s gift matching policy. And if they have that policy then you can ask for a matching gift form from your employer, fill it and send it across to Dhana Yoga Foundation with your gift amount and signature. Rest of the task will be performed by us and we would love to inform you when we receive the matched amount.</p>
                            <p>
                                <address>Dhana Yoga Foundation Inc</address>
                                <address>3 Nicole way,</address>
                                <address>Dartmouth, MA 02747</address>
                            </p>
                            <p>
                                Further, if you have already donated in the past and now you have got to know about the employer matching policy, you can still send us the details of your employer, we can connect with your organization on your behalf and can send in the request under the employee matching initiative of theirs and if they approve, our underprivileged people of DYF still stand the chance to get benefitted for a brighter tomorrow!
                            </p>
                            <p>If you have any questions please feel free to connect with us at <a href="mailto:{{ appSettings('email') }}" class="text-primary hover:underline hover:text-secondary">{{ appSettings('email') }}</a></p>
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        6. Planned giving – Legacy giving:
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            <p>
                                We are remembered only till the time we are alive and are actively working, but what after our death people remember us through our deeds. Let’s do something good for those who really deserve to be supported in every manner. DYF has created such ways by which you can be remembered even after you die for your deeds which will stay alive in the hearts of these innocent smiles and their “Thank You”! There are numerous ways to present someone legacy gifts and some of the most common from all are:
                            </p>
                            <ul class="list-disc list-inside mt-3">
                                <li>Remembering DYF in your will – <a href="{{ route('get-involved.donation.leave-a-will') }}" class="text-primary hover:underline hover:text-secondary" target="_blank">Read More</a></li>
                                <li>Donating an asset or establishing a charitable trust.  <a href="{{ route('get-involved.donation.leave-a-will') }}" class="text-primary hover:underline hover:text-secondary" target="_blank">Read More</a></li>
                                <li>Designating DYF as the beneficiary of your Insurance policy or Retirement fund (401 K and IRA).  <a href="{{ route('get-involved.donation.leave-a-will') }}" class="text-primary hover:underline hover:text-secondary" target="_blank">Read More</a></li>
                            </ul>
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        7. Amazon Smile

                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            You can visit <a href="https://smile.amazon.com/" class="text-primary hover:underline hover:text-secondary">https://smile.amazon.com/</a> Every time you shop at amazon smile program Amazon donate 0.5 % of the price of your eligible purchase to DYF. You need to select DYF as your charitable organization of choice. You would shop normally at smile.amazon.com, a site identical to the main Amazon.
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        8. ebay for charity
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            Well, ebay makes it easy for the sellers who wish to donate a portion of their sales to DYF. All you got to do is to visit www.ebaycharity.org and choose DYF as your charity! Indeed, the undernourished people feel humbled by this gesture of care and will keep you in their blessings forever and ever, as every bit of humanity counts!
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

                <x-frontend.partials.squeeze-box>
                    <x-slot name="title">
                        9. IRA Tax Exempt Rollover
                    </x-slot>
                    <x-slot name="content">
                        <div class="prose-md">
                            Age is no bar in serving the society and the same goes for the people who have reached up to the age of 701/2 years of their age or older stand eligible for the making of IRA gift to DYF and can avail tax benefits for the year. For more details, you can visit our page.
                        </div>
                    </x-slot>
                </x-frontend.partials.squeeze-box>

            </section>

        </div>
    </div>
</x-app-layout>
