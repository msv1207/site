<html>
<body>
<div id="app">
{{--    <example-component></example-component>--}}
{{--    <router-view></router-view>--}}
{{--    <v-header></v-header>--}}
{{--    <test></test>--}}
    @foreach($products as $product)
        <div>
            <div>{{$product->title}}</div>
            <div>{{$product->description}}</div>
            <div>{{$product->id}}</div>
        </div>
    @endforeach
</div>
<script src="./js/app.js"></script>
</body>
</html>
