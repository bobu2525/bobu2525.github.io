<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>墓清掃代行申し込み | やすらぎ供養</title>
    <link rel="stylesheet" href="{{ asset('css/grave-cleaning-apply.css') }}"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header') <!-- ヘッダーをインクルード -->

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li><a href="{{ url('grave-cleaning') }}">墓清掃代行サービス</a></li>
            <li>墓清掃代行申し込み</li>
        </ul>
    </nav>

    <!-- 予約状況 -->
    <section>
        <h2>{{ $year }}年{{ $month }}月の予約状況</h2>
        <div class="calendar-nav">
            <a href="{{ url('grave-cleaning-apply', ['year' => $previousMonth->year, 'month' => $previousMonth->month]) }}">&lt; 前月</a>
            <a href="{{ url('grave-cleaning-apply', ['year' => $nextMonth->year, 'month' => $nextMonth->month]) }}">次月 &gt;</a>
        </div>
        <div class="calendar">
            @foreach ($capacities as $capacity)
            <div class="calendar-period {{ $capacity->status }}">
    <span>{{ $capacity->period }}</span><br>
    <span>{{ $capacity->status }}{{ $capacity->availableSlots !== null ? ': ' . $capacity->availableSlots . '枠' : '' }}</span>
</div>
            @endforeach
        </div>
    </section>


    <!-- 申し込みフォーム -->
    <section class="apply-form">
        <div class="container">
            <h2>墓清掃代行申し込み</h2>
            <p>以下のフォームに必要事項をご記入の上、送信してください。</p>
            <form action="{{ url('submit-application') }}" method="post">
                @csrf
                <!-- 清掃希望期間 -->
                <fieldset class="box">
                    <legend>清掃希望期間</legend>
                    <label><input type="radio" name="cleaning_period" value="1">上旬</label>
                    <label><input type="radio" name="cleaning_period" value="2">中旬</label>
                    <label><input type="radio" name="cleaning_period" value="3">下旬</label>
                </fieldset>

                <!-- 清掃プラン選択 -->
                <fieldset class="box">
                    <legend>清掃プラン選択</legend>
                    <label><input type="radio" name="plan" value="9800" data-name="シンプルプラン" required>シンプルプラン (9,800円 税込)</label>
                    <label><input type="radio" name="plan" value="15000" data-name="ベーシックプラン">ベーシックプラン (15,000円 税込)</label>
                    <label><input type="radio" name="plan" value="29800" data-name="プレミアムプラン">プレミアムプラン (29,800円 税込)</label>
                </fieldset>

                <!-- 清掃オプション選択 -->
                <fieldset class="box">
                    <legend>清掃オプション選択</legend>
                    <label><input type="checkbox" name="options[]" value="3000" data-name="特殊清掃">特殊清掃 (3,000円 税込)</label>
                    <label><input type="checkbox" name="options[]" value="5000" data-name="防草シートの設置">防草シートの設置 (5,000円 税込)</label>
                    <label><input type="checkbox" name="options[]" value="1500" data-name="花のお手入れ">花のお手入れ (1,500円 税込)</label>
                    <label><input type="checkbox" name="options[]" value="10000" data-name="定期清掃">定期清掃 (3回/年 - 10,000円 税込)</label>
                </fieldset>

                <!-- その他特記事項 -->
                <fieldset>
                    <legend>その他特記事項</legend>
                    <textarea name="special_notes" rows="4" placeholder="特に気をつけて清掃して欲しい点など"></textarea>
                </fieldset>

                <!-- お客様情報 -->
                <fieldset>
                    <legend>お客様情報</legend>
                    <label for="name">名前</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">電話番号</label>
                    <input type="tel" id="phone" name="phone" required>
                </fieldset>

                <!-- 返信方法選択 -->
                <fieldset class="box">
                    <legend>返信方法を選択</legend>
                    <label><input type="radio" name="response_method" value="電話" required>電話</label>
                    <label><input type="radio" name="response_method" value="メール">メール</label>
                </fieldset>

                <!-- 注文詳細 -->
                <fieldset class="order-summary">
                    <legend>注文詳細</legend>
                    <div id="order-summary"></div>
                </fieldset>

                <!-- 合計額 -->
                <fieldset class="total-price">
                    <legend>合計額</legend>
                    <div id="total-price">0 円</div>
                </fieldset>

                <button type="submit">送信する</button>
            </form>
        </div>
    </section>
</main>

@include('partials.footer') <!-- フッターをインクルード -->

<script>
    // JavaScriptコードで注文の詳細をリアルタイムで更新
    const form = document.querySelector('form');
    const orderSummary = document.getElementById('order-summary');
    const totalPriceElement = document.getElementById('total-price');

    form.addEventListener('change', updateOrderSummary);

    function updateOrderSummary() {
        const name = form.name.value;
        const email = form.email.value;
        const phone = form.phone.value;
        const responseMethod = form.querySelector('input[name="response_method"]:checked')?.value || '';
        const cleaningPeriod = form.querySelector('input[name="cleaning_period"]:checked')?.value || '';
        const planElement = form.querySelector('input[name="plan"]:checked');
        const planName = planElement ? planElement.getAttribute('data-name') : '';
        const planPrice = planElement ? parseInt(planElement.value) : 0;

        const options = Array.from(form.querySelectorAll('input[name="options[]"]:checked'))
                             .map(option => option.getAttribute('data-name'));
        const optionsPrice = Array.from(form.querySelectorAll('input[name="options[]"]:checked'))
                              .reduce((total, option) => total + parseInt(option.value), 0);

        const specialNotes = form.special_notes.value;

        // 合計金額を計算
        const totalPrice = planPrice + optionsPrice;

        orderSummary.innerHTML = `
            <p><strong>お名前:</strong> ${name}</p>
            <p><strong>メールアドレス:</strong> ${email}</p>
            <p><strong>電話番号:</strong> ${phone}</p>
            <p><strong>返信方法:</strong> ${responseMethod}</p>
            <p><strong>清掃希望期間:</strong> ${cleaningPeriod}</p>
            <p><strong>プラン:</strong> ${planName}</p>
            <p><strong>オプション:</strong> ${options.join(', ')}</p>
            <p><strong>特記事項:</strong> ${specialNotes}</p>
        `;

        totalPriceElement.textContent = `${totalPrice.toLocaleString()} 円`;
    }
</script>
</body>
</html>