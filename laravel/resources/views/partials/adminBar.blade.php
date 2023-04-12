<div id="admin-bar-container">
    <div class="left">
        <a href="{{route('admin.dashboard')}}">Dashboard</a>
        <a href="{{route('admin.combustibile')}}">Combustibili</a>
        <a href="{{route('admin.consumo')}}">Consumi</a>
    </div>
    <div class="right">
        <p>ADMIN</p>
    </div>
</div>

<script>
    let adminBar = document.getElementById('admin-bar-container');
    let rightAdmin = adminBar.querySelector('.right');
    console.log(rightAdmin);
    var active = 0;
    rightAdmin.addEventListener('click', handleClick)

    function handleClick() {
        if(active == 0){
            adminBar.style.left = '0px';
            ++active;
        }else{
            adminBar.style.left = '-120px';
            --active;
        }
        console.log(active)
    }
</script>