
    {{-- MENU SET FORM SPACE START --}}
    <div id="blog-set-form" class="container">
        <h4>블로그 생성</h4>
        <div class="row">
            <div id="blog-form" class="col-md-8">
                <form action="/yerriel96/create/blog/store" method="GET" enctype="multipart/formr-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        {{-- 나중에 수정하기! 해당 블로그 자동 증가 아이디로 --}}
                        <input type="hidden" value="{{$data[0]}}" name="blog_owner_id" />
                        <div class="row">
                            {{--  blog_introduce  --}}
                            <div class="col-md-12">
                                <h3>간단한 블로그 소개글을 작성해주세요.</h3>
                                <textarea name="blog_introduce" id="blog-introduce" cols="101" rows="5" autofocus>
                                
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">등록</button>
                </form>
            </div>
            {{-- BOARD WRITE FORM SPACE END --}}
        </div>
        
    </div>
    {{-- MENU SET FORM SPACE END --}}