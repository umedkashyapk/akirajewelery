<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title> Dashboard | AkiraJewelry</title>
      @include('includes.head')
</head>

<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
                  @include('includes.sidebar')
            <!-- sidebar @e -->
              <!-- wrap @s -->
            <div class="nk-wrap ">
               <!-- header @s -->
               @include('includes.header_1')
                 <!-- header @e -->
               <!-- content @s -->
              @yield('content')
              <!-- content @e-->
            </div>
               <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('includes.footer-script')

</body>

</html>
