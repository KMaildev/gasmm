<div class="sidebar__single sidebar__category">
    <ul class="insurance-details__catagories-list list-unstyled">
        <li>
            <a href="{{ route('home') }}">
                @if (session('key') == 'jp')
                    ホーム
                @elseif (session('key') == 'mm')
                    ပင်မစာမျက်နှာ
                @else
                    Home
                @endif
            </a>
        </li>


        <li>
            <a href="{{ route('about.index') }}">
                @if (session('key') == 'jp')
                    会社概要
                @elseif (session('key') == 'mm')
                    ကုမ္ပဏီအကြောင်း
                @else
                    About Us
                @endif
            </a>
        </li>


        <li>
            <a href="https://goodspeed-group.co.jp/" target="_blank">
                Good Speed Group
            </a>
        </li>

        <li>
            <a href="https://gsjmbridge-mm.com/" target="_blank">
                GSJM自動車整備研修センター
            </a>
        </li>


        <li>
            <a href="{{ route('myanmar.index') }}">
                @if (session('key') == 'jp')
                    ミャンマーとは？
                @elseif (session('key') == 'mm')
                    ミャンマーとは？
                @else
                    What is Myanmar?
                @endif
            </a>
        </li>


        <li>
            <a href="{{ route('recruitment_flow.index') }}">
                @if (session('key') == 'jp')
                    求人の流れ
                @elseif (session('key') == 'mm')
                    Recruitment flow
                @else
                    Recruitment flow
                @endif
            </a>
        </li>

        <li>
            <a href="{{ route('activities.index') }}">
                @if (session('key') == 'jp')
                    ギャラリー
                @elseif (session('key') == 'mm')
                    ဓာတ်ပုံများ
                @else
                    Gallery
                @endif
            </a>
        </li>

        <li>
            <a href="{{ route('contact.index') }}">
                @if (session('key') == 'jp')
                    お問い合わせ
                @elseif (session('key') == 'mm')
                    ဆက်သွယ်ရန်
                @else
                    Contact
                @endif
            </a>
        </li>

    </ul>
</div>
