<html>
<style>
    *{
        font-family: 楷体;
    }
    .imgTag{
        width: 30%;
    }
    .text{
        float: left;
        margin-right: 30%;
    }
    .text h2{
        text-align: center;
    }
</style>
<img class="imgTag" src="{{asset('home/images/Qinghuan.jpg')}}">
<div class="text">
    <h2>{{$title}}</h2>
    <pre>
        记得早先少年时
        大家诚诚恳恳
        说一句 是一句
　　
        清早上火车站
        长街黑暗无行人
        卖豆浆的小店冒着热气
　　
        从前的日色变得慢
        车，马，邮件都慢
        一生只够爱一个人
　　
        从前的锁也好看
        钥匙精美有样子
        你锁了 人家就懂了

                       --{{$author}}
</pre>
</div>

</html>