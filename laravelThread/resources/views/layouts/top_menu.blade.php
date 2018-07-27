@section("top_menu")
<div id="menu">
    <div id="menuContent" data-twitterLogin={{$twitterLoginState}} >
        
        @if( $twitterLoginState === 'logout' )
            <span id="twitterLoginBtn"  v-on:click="twLogin"><p>Login</p></span>
        @else
            <span id="twitterLogoutBtn" v-on:click="twLogout"><p>Logout</p></span>
        @endif
        <span id="pageMoveBtn" ></span>
    </div>
</div>
@endsection