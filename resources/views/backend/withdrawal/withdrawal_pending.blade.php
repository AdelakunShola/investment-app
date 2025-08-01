@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">    Pending Withdrawal 
</h2>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-tab-bars">
                        <ul>

                                        
                                <li class="active">
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="calendar" icon-name="calendar" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>Withdrawal Pending</a>
                                </li>
                                                    </ul>
                    </div>
                    <div class="row">
                        
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-table table-responsive">
                 

                    <table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>User</th>
            <th>Transaction ID</th>
            <th>Amount</th>
            <th>Charge</th>
            <th>Wallet</th>
            <th>Gateway</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($withdraw as $withdraws)
        <tr>
            <td>{{ \Carbon\Carbon::parse($withdraws->created_at)->format('M d Y H:i') }}</td>
            <td>
                <a class="link" href="{{ route('admin.user.edit', $withdraws->user->id) }}">
                    {{ $withdraws->user->username ?? 'N/A' }}
                </a>
            </td>
            <td><strong>{{ 'TRX' . strtoupper(Str::random(10)) }}</strong></td>
            <td><strong class="red-color">-{{ number_format($withdraws->amount, 2) }} USD</strong></td>
            <td>{{ number_format($withdraws->charge ?? 0, 2) }} USD</td>
            <td>
    <form action="{{ route('admin.withdrawal.update.wallet', $withdraws->id) }}" method="POST" class="d-flex">
        @csrf
        @method('PUT')
        <input type="text" name="wallet" value="{{ $withdraws->wallet }}" class="form-control form-control-sm" style="width: 100px;">
        <button type="submit" class="btn btn-sm btn-primary ms-1">Save</button>
    </form>
</td>

            <td>{{ ucfirst($withdraws->method ?? 'N/A') }}</td>
            <td>
                @php
                    $statusClass = match($withdraws->status) {
                        'pending' => 'pending',
                        'success' => 'success',
                        'failed' => 'danger',
                        default => 'info',
                    };
                @endphp
                <div class="site-badge {{ $statusClass }}">
                    {{ ucfirst($withdraws->status) }}
                </div>
            </td>
            <td><span data-id="76582" id="withdraws-action">
      <!-- Pass deposit data to modal -->
<button type="button"
        class="round-icon-btn red-btn"
        data-bs-toggle="modal"
        data-bs-target="#withdrawActionModal"
        data-id="{{ $withdraws->id }}"
        data-amount="{{ $withdraws->amount }}"
        data-user="{{ $withdraws->user->username }}"
        data-conversion="{{ $withdraws->conversion_amount ?? $withdraws->amount }}">
    <i data-lucide="eye"></i>
</button>

    </span>
</td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">No Withdrawal found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

                   
                </div>
            </div>
        </div>
    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="withdrawActionModal" tabindex="-1" aria-labelledby="withdrawActionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content site-table-modal">
      <div class="modal-body popup-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        <div class="popup-body-text withdraw-action">
          <h3 class="title mb-4">Withdrawal Approval Action</h3>

          <ul class="list-group mb-4">
            <li class="list-group-item">Total amount: <strong id="modalAmount">--</strong></li>
            <li class="list-group-item">Conversion amount: <strong id="modalConversion">--</strong></li>
          </ul>

          <form id="withdrawActionForm" method="POST" action="{{ route('admin.withdrawal.action') }}">
            @csrf
            <input type="hidden" name="id" id="modalWithdrawId">

            

            <div class="action-btns mt-3">
              <button type="submit" name="approve" value="yes" class="site-btn-sm primary-btn me-2">
                <i data-lucide="check"></i> Approve
              </button>
              <button type="submit" name="reject" value="yes" class="site-btn-sm red-btn">
                <i data-lucide="x"></i> Reject
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>



    <script>
  const withdrawModal = document.getElementById('withdrawActionModal');
  withdrawModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;

    // Set values
    document.getElementById('modalWithdrawId').value = button.getAttribute('data-id');
    document.getElementById('modalAmount').innerText = button.getAttribute('data-amount') + ' USD';
    document.getElementById('modalConversion').innerText = button.getAttribute('data-conversion') + ' USDT';
  });
</script>


    @endsection