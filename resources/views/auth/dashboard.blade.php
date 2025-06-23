@extends('layout.app')

@section('title', 'School Management Dashboard')

@section('styles')
<style>
    .sidebar {
        min-height: 200vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .sidebar .nav-link {
        color: rgba(255, 255, 255, 0.8);
        padding: 15px 20px;
        border-radius: 10px;
        margin: 5px 0;
        transition: all 0.3s;
    }
    .sidebar .nav-link:hover, .sidebar .nav-link.active {
        color: white;
        background: rgba(255, 255, 255, 0.1);
    }
    .stat-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }
    .stat-card:hover {
        transform: translateY(-5px);
    }
    .icon-bg {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .purple-bg { background: rgba(139, 69, 19, 0.1); color: #8b4513; }
    .orange-bg { background: rgba(255, 165, 0, 0.1); color: #ffa500; }
    .pink-bg { background: rgba(255, 192, 203, 0.1); color: #ff69b4; }
    .blue-bg { background: rgba(0, 123, 255, 0.1); color: #007bff; }
    .btn-exam {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 10px;
        color: white;
        padding: 10px 20px;
        font-weight: 600;
    }
    .btn-exam:hover {
        opacity: 0.9;
        color: white;
    }
    .chart-placeholder {
        height: 300px;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        font-weight: 600;
    }
    .schedule-item {
        border-left: 4px solid #667eea;
        background: #f8f9fa;
        border-radius: 0 10px 10px 0;
    }
    .news-item {
        border-bottom: 1px solid #eee;
        padding: 15px 0;
    }
    .news-item:last-child {
        border-bottom: none;
    }
    .fw-bold {
        font-weight: bold !important;
    }
    .text-muted {
        color: #6c757d !important;
    }
    .badge {
        font-size: 0.75em;
        font-weight: 600;
        padding: 0.35em 0.65em;
    }
    .bg-primary {
        background-color: #0d6efd !important;
    }
    .bg-success {
        background-color: #198754 !important;
    }
    .bg-warning {
        background-color: #ffc107 !important;
        color: #000 !important;
    }
    .bg-danger {
        background-color: #dc3545 !important;
    }
    .text-warning {
        color: #ffc107 !important;
    }
    .text-info {
        color: #0dcaf0 !important;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar px-0">
            <div class="p-4">
                <div class="text-center mb-4">
                    <h4 class="text-white fw-bold">School Portal</h4>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#"><i class="fas fa-home me-2"></i> Dashboard</a>
                    <a class="nav-link" href="#"><i class="fas fa-users me-2"></i> Students</a>
                    <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher me-2"></i> Teachers</a>
                    <a class="nav-link" href="#"><i class="fas fa-book me-2"></i> Courses</a>
                    <a class="nav-link" href="#"><i class="fas fa-calendar me-2"></i> Schedule</a>
                    <a class="nav-link" href="#"><i class="fas fa-clipboard-list me-2"></i> Exams</a>
                    <a class="nav-link" href="#"><i class="fas fa-chart-bar me-2"></i> Reports</a>
                    <a class="nav-link" href="#"><i class="fas fa-cog me-2"></i> Settings</a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10">
            <!-- Header -->
            <header class="bg-white border-bottom p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="mb-0 fw-bold">Hello Kosoko 👋</h2>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="input-group me-3" style="width: 400px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" placeholder="Search from subjects, assignments, resources">
                        </div>
                        <button class="btn btn-outline-secondary me-2 position-relative">
                            <i class="fas fa-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 8px;">
                                !
                            </span>
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-calendar"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Dashboard Content -->
            <main class="p-4">
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Total Students</p>
                                    <h3 class="fw-bold mb-0">950</h3>
                                </div>
                                <div class="icon-bg purple-bg">
                                    <i class="fas fa-users fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">My Courses</p>
                                    <h3 class="fw-bold mb-0">16</h3>
                                </div>
                                <div class="icon-bg orange-bg">
                                    <i class="fas fa-book fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Dept Courses</p>
                                    <h3 class="fw-bold mb-0">22</h3>
                                </div>
                                <div class="icon-bg pink-bg">
                                    <i class="fas fa-award fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stat-card h-100">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Department</p>
                                    <h3 class="fw-bold mb-0">950</h3>
                                </div>
                                <div class="icon-bg blue-bg">
                                    <i class="fas fa-building fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="row mb-4">
                    <div class="col-lg-8 mb-3">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Student Performance Overview</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-placeholder">
                                    <div class="text-center">
                                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                                        <div>Performance Chart</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Grade Distribution</h5>
                            </div>
                            <div class="card-body">
                                <div class="chart-placeholder" style="height: 250px;">
                                    <div class="text-center">
                                        <i class="fas fa-chart-pie fa-2x mb-3"></i>
                                        <div>Grade Chart</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Section -->
                <div class="row">
                    <!-- Schedule -->
                    <div class="col-lg-8 mb-3">
                        <div class="card">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Today's Schedule</h5>
                                <span class="text-muted">March 15, 2024</span>
                            </div>
                            <div class="card-body">
                                <div class="schedule-item p-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="mb-1">Mathematics</h6>
                                            <p class="text-muted mb-0">Advanced Calculus - Room 101</p>
                                        </div>
                                        <span class="badge bg-primary">9:00 AM</span>
                                    </div>
                                </div>
                                <div class="schedule-item p-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="mb-1">Physics</h6>
                                            <p class="text-muted mb-0">Quantum Mechanics - Lab 203</p>
                                        </div>
                                        <span class="badge bg-success">11:00 AM</span>
                                    </div>
                                </div>
                                <div class="schedule-item p-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="mb-1">Chemistry</h6>
                                            <p class="text-muted mb-0">Organic Chemistry - Lab 105</p>
                                        </div>
                                        <span class="badge bg-warning">2:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Content -->
                    <div class="col-lg-4">
                        <!-- Reminders -->
                        <div class="card mb-3">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Reminders</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-clock text-warning me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Assignment Due</h6>
                                        <small class="text-muted">Math homework - Tomorrow</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-calendar text-info me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Parent Meeting</h6>
                                        <small class="text-muted">Friday 3:00 PM</small>
                                    </div>
                                </div>
                                <button class="btn btn-exam w-100">
                                    <i class="fas fa-clipboard-check me-2"></i>
                                    Take a Exam
                                </button>
                            </div>
                        </div>

                        <!-- News -->
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">School News</h5>
                            </div>
                            <div class="card-body">
                                <div class="news-item">
                                    <h6 class="mb-1">New Library Opens</h6>
                                    <small class="text-muted">The new digital library is now open for all students...</small>
                                </div>
                                <div class="news-item">
                                    <h6 class="mb-1">Sports Day Event</h6>
                                    <small class="text-muted">Annual sports day scheduled for next month...</small>
                                </div>
                                <div class="news-item">
                                    <h6 class="mb-1">Science Fair 2024</h6>
                                    <small class="text-muted">Registration opens for the science fair competition...</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Add click functionality to the Take a Exam button
    document.addEventListener('DOMContentLoaded', function() {
        const examBtn = document.querySelector('.btn-exam');
        if (examBtn) {
            examBtn.addEventListener('click', function() {
                alert('Redirecting to exam portal...');
            });
        }

        // Add click functionality to sidebar links
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.sidebar .nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>
@endsection
