<div class="side-nav">
   <div class="side-nav-inside">
      <ul class="side-nav-menu">
         <li class="side-nav-item active">
            <a href="https://hyiprio.tdevs.co/admin">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout-dashboard" icon-name="layout-dashboard" class="lucide lucide-layout-dashboard">
                  <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                  <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                  <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                  <rect width="7" height="5" x="3" y="16" rx="1"></rect>
               </svg>
               <span>Dashboard</span>
            </a>
         </li>
         <li class="side-nav-item category-title">
            <span>Customer Management</span>
         </li>
         <li class="side-nav-item side-nav-dropdown ">
            <a href="javascript:void(0);" class="dropdown-link">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="users" icon-name="users" class="lucide lucide-users">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
               </svg>
               <span>Customers</span>
               <span class="right-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" icon-name="chevron-down" class="lucide lucide-chevron-down">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </span>
            </a>
            <ul class="dropdown-items">
               <li>
                  <a href="{{ route('admin.customer.all') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-users">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                     </svg>
                     All Customers
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin.customer.active') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user-check">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <polyline points="16 11 18 13 22 9"></polyline>
                     </svg>
                     Active Customers
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin.customer.disabled') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user-x">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <line x1="17" y1="8" x2="22" y2="13"></line>
                        <line x1="22" y1="8" x2="17" y2="13"></line>
                     </svg>
                     Disabled Customers
                  </a>
               </li>
            </ul>
         </li>
         <li class="side-nav-item category-title">
            <span>Plans</span>
         </li>
         <li class="side-nav-item side-nav-dropdown ">
            <a href="javascript:void(0);" class="dropdown-link">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="album" icon-name="album" class="lucide lucide-album">
                  <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                  <polyline points="11 3 11 11 14 8 17 11 17 3"></polyline>
               </svg>
               <span>Manage Schema</span>
               <span class="right-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" icon-name="chevron-down" class="lucide lucide-chevron-down">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </span>
            </a>
            <ul class="dropdown-items">
               <li class="side-nav-item ">
                  <a href="{{ route('admin.manage.plans') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="airplay" icon-name="airplay" class="lucide lucide-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                     </svg>
                     <span>Manage Plans</span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="side-nav-item category-title">
            <span>Transactions</span>
         </li>
         <li class="side-nav-item">
            <a href="{{ route('admin.transactions.all') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cast">
                  <path d="M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                  <path d="M2 12a9 9 0 0 1 8 8"></path>
                  <path d="M2 16a5 5 0 0 1 4 4"></path>
                  <line x1="2" x2="2.01" y1="20" y2="20"></line>
               </svg>
               <span>Transactions</span>
            </a>
         </li>
         <li class="side-nav-item">
            <a href="{{ route('admin.transactions.investments') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-anchor">
                  <circle cx="12" cy="5" r="3"></circle>
                  <line x1="12" x2="12" y1="22" y2="8"></line>
                  <path d="M5 12H2a10 10 0 0 0 20 0h-3"></path>
               </svg>
               <span>Investments</span>
            </a>
         </li>
         <li class="side-nav-item">
            <a href="{{ route('admin.transactions.profits') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card">
                  <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                  <line x1="2" x2="22" y1="10" y2="10"></line>
               </svg>
               <span>User Profits</span>
            </a>
         </li>


          <li class="side-nav-item category-title">
            <span>Blog Ads</span>
         </li>

         <li class="side-nav-item">
            <a href="{{ route('admin.luxury_ads.create') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-anchor">
                  <circle cx="12" cy="5" r="3"></circle>
                  <line x1="12" x2="12" y1="22" y2="8"></line>
                  <path d="M5 12H2a10 10 0 0 0 20 0h-3"></path>
               </svg>
               <span>Create ad</span>
            </a>
         </li>


          <li class="side-nav-item">
            <a href="{{ route('admin.luxury_ads.index') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-anchor">
                  <circle cx="12" cy="5" r="3"></circle>
                  <line x1="12" x2="12" y1="22" y2="8"></line>
                  <path d="M5 12H2a10 10 0 0 0 20 0h-3"></path>
               </svg>
               <span>All ads</span>
            </a>
         </li>


         



         <li class="side-nav-item category-title">
            <span>Essentials</span>
         </li>
         <li class="side-nav-item ">
            <a href="https://hyiprio.tdevs.co/admin/gateway/automatic">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="door-open" icon-name="door-open" class="lucide lucide-door-open">
                  <path d="M13 4h3a2 2 0 0 1 2 2v14"></path>
                  <path d="M2 20h3"></path>
                  <path d="M13 20h9"></path>
                  <path d="M10 12v.01"></path>
                  <path d="M13 4.562v16.157a1 1 0 0 1-1.242.97L5 20V5.562a2 2 0 0 1 1.515-1.94l4-1A2 2 0 0 1 13 4.561Z"></path>
               </svg>
               <span>Automatic Gateways</span>
            </a>
         </li>
         <li class="side-nav-item side-nav-dropdown ">
            <a href="javascript:void(0);" class="dropdown-link">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-down-circle" icon-name="arrow-down-circle" class="lucide lucide-arrow-down-circle">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="M12 8v8"></path>
                  <path d="m8 12 4 4 4-4"></path>
               </svg>
               <span>Deposits</span>
               <span class="right-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" icon-name="chevron-down" class="lucide lucide-chevron-down">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </span>
            </a>
            <ul class="dropdown-items">
               <li class="">
                  <a href="{{ route('admin.deposits.pending') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="columns" icon-name="columns" class="lucide lucide-columns">
                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                        <line x1="12" x2="12" y1="3" y2="21"></line>
                     </svg>
                     Pending Manual Deposits
                  </a>
               </li>
               <li class="">
                  <a href="{{ route('admin.deposits.all') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="clipboard-check" icon-name="clipboard-check" class="lucide lucide-clipboard-check">
                        <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                        <path d="m9 14 2 2 4-4"></path>
                     </svg>
                     Deposit History
                  </a>
               </li>
            </ul>
         </li>
         <li class="side-nav-item side-nav-dropdown  ">
            <a href="javascript:void(0);" class="dropdown-link">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="landmark" icon-name="landmark" class="lucide lucide-landmark">
                  <line x1="3" x2="21" y1="22" y2="22"></line>
                  <line x1="6" x2="6" y1="18" y2="11"></line>
                  <line x1="10" x2="10" y1="18" y2="11"></line>
                  <line x1="14" x2="14" y1="18" y2="11"></line>
                  <line x1="18" x2="18" y1="18" y2="11"></line>
                  <polygon points="12 2 20 7 4 7"></polygon>
               </svg>
               <span>Withdraw</span>
               <span class="right-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" icon-name="chevron-down" class="lucide lucide-chevron-down">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </span>
            </a>
            <ul class="dropdown-items">
               <li class="">
                  <a href="{{ route('admin.withdrawal.pending') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="wallet" icon-name="wallet" class="lucide lucide-wallet">
                        <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path>
                        <path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path>
                        <path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path>
                     </svg>
                     Pending Withdraws
                  </a>
               </li>
               <li class="">
                  <a href="{{ route('admin.withdrawal.all') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="piggy-bank" icon-name="piggy-bank" class="lucide lucide-piggy-bank">
                        <path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.7-1 2-2h2v-4h-2c0-1-.5-1.5-1-2h0V5z"></path>
                        <path d="M2 9v1c0 1.1.9 2 2 2h1"></path>
                        <path d="M16 11h0"></path>
                     </svg>
                     Withdraw History
                  </a>
               </li>
            </ul>
         </li>
         <li class="side-nav-item side-nav-dropdown ">
            <a href="javascript:void(0);" class="dropdown-link">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="settings-2" icon-name="settings-2" class="lucide lucide-settings-2">
                  <path d="M20 7h-9"></path>
                  <path d="M14 17H5"></path>
                  <circle cx="17" cy="17" r="3"></circle>
                  <circle cx="7" cy="7" r="3"></circle>
               </svg>
               <span>Manage Referral</span>
               <span class="right-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" icon-name="chevron-down" class="lucide lucide-chevron-down">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </span>
            </a>
            <ul class="dropdown-items">
               <li class="">
                  <a href="https://hyiprio.tdevs.co/admin/referral/level">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="align-end-horizontal" icon-name="align-end-horizontal" class="lucide lucide-align-end-horizontal">
                        <rect width="6" height="16" x="4" y="2" rx="2"></rect>
                        <rect width="6" height="9" x="14" y="9" rx="2"></rect>
                        <path d="M22 22H2"></path>
                     </svg>
                     Multi Level Referral
                  </a>
               </li>
            </ul>
         </li>
         <li class="side-nav-item ">
            <a href="{{ route('rankings.index') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="medal" icon-name="medal" class="lucide lucide-medal">
                  <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                  <path d="M11 12 5.12 2.2"></path>
                  <path d="m13 12 5.88-9.8"></path>
                  <path d="M8 7h8"></path>
                  <circle cx="12" cy="17" r="5"></circle>
                  <path d="M12 18v-2h-.5"></path>
               </svg>
               <span>User Rankings</span>
            </a>
         </li>
         <li class="side-nav-item category-title">
            <span>Site Settings</span>
         </li>
         <li class="side-nav-item side-nav-dropdown ">
            <a href="javascript:void(0);" class="dropdown-link">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="settings" icon-name="settings" class="lucide lucide-settings">
                  <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
               </svg>
               <span>Settings</span>
               <span class="right-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" icon-name="chevron-down" class="lucide lucide-chevron-down">
                     <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
               </span>
            </a>
            <ul class="dropdown-items">
               <li class="">
                  <a href="https://hyiprio.tdevs.co/admin/settings/site">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="settings-2" icon-name="settings-2" class="lucide lucide-settings-2">
                        <path d="M20 7h-9"></path>
                        <path d="M14 17H5"></path>
                        <circle cx="17" cy="17" r="3"></circle>
                        <circle cx="7" cy="7" r="3"></circle>
                     </svg>
                     Site Settings
                  </a>
               </li>
            </ul>
         </li>
         <li class="side-nav-item category-title">
            <span>Others</span>
         </li>
         <li class="side-nav-item ">
            <a href="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail-open" icon-name="mail-open" class="lucide lucide-mail-open">
                  <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path>
                  <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
               </svg>
               <span>All Subscriber</span>
            </a>
         </li>
      </ul>
   </div>
</div>