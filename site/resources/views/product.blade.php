<html>
<body>
<div id="app">
    {{--    <example-component></example-component>--}}
    {{--    <router-view></router-view>--}}
    {{--    <v-header></v-header>--}}
    {{--    <test></test>--}}

        <div>
            <div>{{$products->title}}</div>
            <div>{{$products->description}}</div>
            <div>{{$products->id}}</div>
        </div>
<a href="{{route("add", $products->id)}}">njksnkdjnvknsjkdvcs</a>
</div>
<script src="./js/app.js"></script>
</body>
</html>
