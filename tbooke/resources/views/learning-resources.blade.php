@include('includes.header')
{{-- Sidebar --}}
@include('includes.sidebar')

{{-- Topbar --}}
<div class="main">
    @include('includes.topbar')
    {{-- Main Content --}}
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Learning Resources</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a class="dashboard-cards-a" href="{{route('feed')}}">
                    <div class="card">
                        <div class="card-header learning">
                            <h5 class="card-title mb-3 card-title-dashboard">Tbooke Learning</h5>
                            <p>Explore Tbooke Learning, your hub for diverse educational content, interactive lessons, and meaningful connections with learners and educators.</p>
                        </div>
                    </div>
                </a>
            </div>
            <h1>Coming soon!!!</h1>
        </div>
    </main>
    {{-- footer --}}
    @include('includes.footer')
</div>
