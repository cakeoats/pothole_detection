<aside id="sidebar">
    <div class="d-flex">
        <!-- Sidebar Toggle Button -->
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#"></a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="/dashboard" class="sidebar-link log-link" data-activity="Dashboard Page Accessed">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/validation" class="sidebar-link log-link" data-activity="Validation Page Accessed">
                <i class="lni lni-check-box"></i>
                <span>Validation</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/history" class="sidebar-link log-link" data-activity="History Page Accessed">
                <i class="lni lni-folder"></i>
                <span>History</span>
            </a>
        </li>
        @auth('admin')
        <li class="sidebar-item">
            <a href="/user" class="sidebar-link">
                <i class="lni lni-users"></i>
                <span>User Management</span>
            </a>
        </li>
        @endauth
    </ul>
    <div class="sidebar-footer">
        <a href="{{ route('logout') }}" class="sidebar-link log-link" data-activity="Logout Button Clicked">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('.toggle-btn');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', function() {
            sidebar.classList.toggle('expand');
        });
    });
</script>