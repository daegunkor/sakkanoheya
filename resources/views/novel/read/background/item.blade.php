<script src="/js/JHM-Custom/item_info.js"></script>
<script>item_info( <?=json_encode($data)?> )</script>
<div class="row">
        @if ($data[0] == 0)
        <div class="col-md-12 text-center" name="item-view">
                <strong>아직 공개된 배경 정보가 없습니다.</strong>
        @else
        <div class="col-md-3 text-center" name="item-view">
            @foreach ($data as $item)
                <img id="{{$item['id']}}" src="/img/background/itemImg/{{$item['img_src']}}" alt="item image" class="img-circle img-things-size item_list event_list" name="img_icon">
            @endforeach
        @endif
    </div>
    <div class="col-md-9 table-responsive" name="item-info">
		<table class="table">
            <tr>
                <td>
                    <strong>이름</strong>
                </td>
                <td name="item-name">
                    {{-- NAME --}}
                </td>
            </tr>
            <tr>
                <td>
                    <strong>내용</strong>
                </td>
                <td name="item-info">
                    {{-- INFO --}}
                </td>
            </tr>
            <tr>
                <td>
                    <strong>분류</strong>
                </td>
                <td name="item-category">
                    {{-- CATEGORY --}}
                </td>
            </tr>
            <tr>
                <td>
                    <strong>작가의 설정</strong>
                </td>
                <td name="item-refer_info">
                    {{-- REFER INFO --}}
                </td>
            </tr>
		</table>

    </div>
</div>