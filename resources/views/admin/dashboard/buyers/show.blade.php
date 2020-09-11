@extends('admin.layouts.app')

@section('title', 'ダッシュボード | 購入者リスト')

@section('contents')
<section class="dashboardPageActionSec dashboard02">
    <div class="dashboardPageActionSec__bar"><a class="btn-backToDashboard" href="../dashboard_02.html">一覧へもどる</a></div>
</section>

<section class="dashboardDetailPage__detailCont">
    <div class="detailContInner">
        <div class="detailContInner__textArea">
            <h4 class="detailContInner__buyerNameText">購入者アカウント名がこちらに入ります。</h4>
            <p class="detailContInner__deviceNameText">デバイス(iOS/Android)がこちらに入ります。</p>
            <div class="detailContInner__purchaseDetail">
                <div class="detailContInner__purchaseDetailNoText">購入件数：000件</div>
                <div class="detailContInner__purchaseDetailTotalNoText">購入合計金額：000000円</div>
            </div>
        </div>
        <div class="detailContInner__tableCont">
            <table class="detailContInner__table">
                <thead>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                    <tr class="detailContInner__row">
                        <td class="detailContInner__itemDateTime">購入日時</td>
                        <td class="detailContInner__itemPurchaseContent">購入コンテンツ</td>
                        <td class="detailContInner__itemPurchasePrice">購入金額</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
