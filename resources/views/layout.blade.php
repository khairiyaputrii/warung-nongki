<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    {{-- uncommon --}}
    @yield('uncommon_head')
</head>
<body class="d-flex flex-column" style="min-height:100vh">
    <div class="modal" tabindex="-1" id="modal">
        <div class="modal-dialog modal-dialog-scrollable" id="modalDialog" style="height: 40vh">
            <div class="modal-content" id="modalContent">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Notifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    
                </div>
                {{-- <div class="modal-footer">
                </div> --}}
            </div>
        </div>
    </div>

    @include('includes.header')
    
    <div class="flex-fill" style="min-height: 500px">
        @yield('content')
    </div>

    @include('includes.footer')
</body>
</html>