@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">User Rankings</h2>
                                                            <a href="" class="title-btn" type="button" data-bs-toggle="modal" data-bs-target="#addNewRanking">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus-circle" icon-name="plus-circle" class="lucide lucide-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg>Add New</a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-card">
                        <div class="site-card-body">
                            <div class="site-table table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Ranking</th>
                                        <th scope="col">Ranking Icon</th>
                                        <th scope="col">Ranking Name</th>
                                        <th scope="col">Minimum Earning</th>
                                        <th scope="col">Bonus</th>
                                        <th scope="col">Description</th>
                                       
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                  <tbody>
                                    @foreach($rankings as $ranking)
                                    <tr>
                                        <td><strong>{{ $ranking->ranking }}</strong></td>
                                        <td><img class="avatar" src="{{ asset('storage/' . $ranking->icon) }}" alt=""></td>
                                        <td><strong>{{ $ranking->ranking_name }}</strong></td>
                                        <td><strong>{{ number_format($ranking->minimum_earnings, 2) }} USD</strong></td>
                                        <td><strong>{{ number_format($ranking->bonus, 2) }} USD</strong></td>
                                        <td>{{ $ranking->description }}</td>
                                        
                                        <td>
                            
                                         <!--       <button type="button"
    class="round-icon-btn primary-btn editRanking"
    data-ranking='@json($ranking)'
    data-bs-toggle="modal"
    data-bs-target="#editRanking">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            </button>-->

                                            <form action="{{ route('admin.ranking.destroy', $ranking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ranking?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal for Add New Ranking -->
<div class="modal fade" id="addNewRanking" tabindex="-1" aria-labelledby="addNewRankingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content site-table-modal">
            <div class="modal-body popup-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="popup-body-text">
                    <h3 class="title mb-4">Add New Ranking</h3>
                    <form action="{{ route('admin.ranking.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="site-input-groups mb-2">
                            <label class="box-input-label">Ranking Icon:</label>
                            <div class="wrap-custom-file">
                                <input type="file" name="icon" id="icon" accept=".gif, .jpg, .png, .svg">
                                <label for="icon">
                                    <img class="upload-icon" src="{{ asset('assets/global/materials/upload.svg') }}" alt="">
                                    <span>Upload Icon</span>
                                </label>
                            </div>
                        </div>

                        <div class="site-input-groups row mb-0">
                            <div class="col-xl-6">
                                <label class="box-input-label">Ranking:</label>
                                <input type="text" name="ranking" class="box-input mb-0" placeholder="Eg: 1, 2, 3..." >
                            </div>
                            <div class="col-xl-6">
                                <label class="box-input-label">Ranking Name:</label>
                                <input type="text" name="ranking_name" class="box-input mb-0" placeholder="Ranking Name" >
                            </div>
                        </div>

                        <div class="site-input-groups row mb-0">
                            <div class="col-xl-6">
                                <label class="box-input-label">Minimum Deposit:</label>
                                <div class="input-group joint-input">
                                    <input type="text" class="form-control" name="minimum_deposit" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="box-input-label">Minimum Invest:</label>
                                <div class="input-group joint-input">
                                    <input type="text" class="form-control" name="minimum_invest" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                        </div>

                        <div class="site-input-groups row mb-0">
                            <div class="col-xl-6">
                                <label class="box-input-label">Minimum Earnings:</label>
                                <div class="input-group joint-input">
                                    <input type="text" class="form-control" name="minimum_earnings" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="box-input-label">Bonus:</label>
                                <div class="input-group joint-input">
                                    <input type="text" class="form-control" name="bonus" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                        </div>

                        <div class="site-input-groups mb-0">
                            <label class="box-input-label">Description:</label>
                            <textarea name="description" class="form-textarea" placeholder="Description"></textarea>
                        </div>

                       

                        <div class="action-btns">
                            <button type="submit" class="site-btn-sm primary-btn me-2">
                                <i class="lucide lucide-check"></i> Add Ranking
                            </button>
                            <a href="#" class="site-btn-sm red-btn" data-bs-dismiss="modal">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                <!-- Modal for Add New Ranking-->

        <!-- Modal for Edit Ranking -->
       <!-- Modal for Edit Ranking -->
<div class="modal fade" id="editRanking" tabindex="-1" aria-labelledby="editRankingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content site-table-modal">
            <div class="modal-body popup-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <form id="rankingEditForm" method="PUT" enctype="multipart/form-data">
                    @csrf
                 
                    <div class="popup-body-text">
                        <h3 class="title mb-4">Edit Ranking</h3>

                        <div class="site-input-groups">
                            <label class="box-input-label">Ranking Icon:</label>
                            <div class="wrap-custom-file">
                                <input type="file" name="icon" id="image6" accept=".gif, .jpg, .png">
                                <label for="image6" id="image-old">
                                    <img class="upload-icon" src="{{ asset('assets/global/materials/upload.svg') }}" alt="">
                                    <span>Update Icon</span>
                                </label>
                            </div>
                        </div>

                        <div class="site-input-groups row mb-0">
                            <div class="col-xl-6">
                                <label class="box-input-label">Ranking:</label>
                                <input type="text" name="ranking" class="box-input mb-0 ranking" >
                            </div>
                            <div class="col-xl-6">
                                <label class="box-input-label">Ranking Name:</label>
                                <input type="text" name="ranking_name" class="box-input mb-0 ranking-name" >
                            </div>
                        </div>

                        <div class="site-input-groups row mb-0">
                            <div class="col-xl-6">
                                <label class="box-input-label">Minimum Deposit:</label>
                                <div class="input-group joint-input">
                                    <input type="text" name="minimum_deposit" class="form-control minimum-deposit" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="box-input-label">Minimum Invest:</label>
                                <div class="input-group joint-input">
                                    <input type="text" name="minimum_invest" class="form-control minimum-invest" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                        </div>

                        <div class="site-input-groups row mb-0">
                            <div class="col-xl-6">
                                <label class="box-input-label">Minimum Earning:</label>
                                <div class="input-group joint-input">
                                    <input type="text" name="minimum_earnings" class="form-control minimum-earnings" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label class="box-input-label">Bonus:</label>
                                <div class="input-group joint-input">
                                    <input type="text" name="bonus" class="form-control bonus" >
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>
                        </div>

                        <div class="site-input-groups mb-0">
                            <label class="box-input-label">Description:</label>
                            <textarea name="description" class="form-textarea description"></textarea>
                        </div>

                        

                        <div class="action-btns">
                            <button type="submit" class="site-btn-sm primary-btn me-2">
                                <i class="lucide lucide-check"></i> Save Changes
                            </button>
                            <a href="#" class="site-btn-sm red-btn" data-bs-dismiss="modal">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                <!-- Modal for Edit Ranking-->

    </div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.editRanking').forEach(button => {
        button.addEventListener('click', function () {
            const data = JSON.parse(this.dataset.ranking);
            const form = document.getElementById('rankingEditForm');

            // Correct route
            form.action = `/admin/update/rankings/${data.id}`;
            
            form.querySelector('[name="ranking"]').value = data.ranking ?? '';
            form.querySelector('[name="ranking_name"]').value = data.ranking_name ?? '';
            form.querySelector('[name="minimum_deposit"]').value = data.minimum_deposit ?? '';
            form.querySelector('[name="minimum_invest"]').value = data.minimum_invest ?? '';
            form.querySelector('[name="minimum_earnings"]').value = data.minimum_earnings ?? '';
            form.querySelector('[name="bonus"]').value = data.bonus ?? '';
            form.querySelector('[name="description"]').value = data.description ?? '';

            document.getElementById('activeStatus').checked = data.status == 1;
            document.getElementById('disableStatus').checked = data.status == 0;

            const preview = document.getElementById('image-old');
            preview.innerHTML = `
                <img class="upload-icon" src="/storage/${data.icon}" alt="Preview"><span>Update Icon</span>
            `;
        });
    });
});
</script>
@endpush

    @endsection