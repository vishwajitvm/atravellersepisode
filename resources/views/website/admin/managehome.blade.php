@extends('website.websitemaster')

@section('websitespages')
<!--META DATA-->
@php
    //meta keywords
    $title = "Manage Home" ;
    $metakeywordname = "AtravellersEpisode Keywords" ;
    $metakeywordContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;

    //meta descriptions
    $metaDescriptionName = "AtravellersEpisode Description" ;
    $metaDescriptionContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;
@endphp
<!--META DATA END-->

<main>
    <!-- Breadcrumbs Start -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Manage Home</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('homepage') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">Manage Home</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- Manage Home Area Start -->
    <section class="destination-section bottom-padding1">
        <div class="destination-area">
            <div class="container">
                <!-- Info -->
                <div class="destination-details-info">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="title mb-0">Manage Home</h4>
                        @if ($manageHomes) <!-- Check if record exists -->
                            <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#manageHomeModal" onclick="openEditForm({{ json_encode($manageHomes) }})">Edit</button>
                        @else
                            <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#manageHomeModal" onclick="openAddForm()">Add New</button>
                        @endif
                    </div>
                    <div class="info-table">
                        @if ($manageHomes)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Video</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="max-width: 300px">{{ $manageHomes->title }}</td>
                                        <td>
                                            <video controls width="250">
                                                <source src="{{ asset( $manageHomes->video) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </td>
                                        <td>{{ $manageHomes->status }}</td>
                                        <td>
                                            <form action="{{ route('admin.manage-home-delete', $manageHomes->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <p>No records found. Please add a new entry.</p>
                        @endif
                    </div>
                </div>
                <!-- /Info -->
            </div>
        </div>
    </section>
    <!--/ End-of Manage Home-->

    <!-- Modal for Add/Edit -->
    <div class="modal fade" id="manageHomeModal" tabindex="-1" aria-labelledby="manageHomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="manageHomeForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="entryId" name="id">

                    <div class="modal-header">
                        <h5 class="modal-title" id="manageHomeModalLabel">Add New Entry</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="video" class="form-label">Upload Video</label>
                                <input type="file" class="form-control" id="video" name="video" accept="video/mp4,video/avi,video/mov">
                                <small class="text-muted">Leave empty if you don’t want to change the video (for edit).</small>
                            </div>
                            <div class="col-sm-12">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Modal for Add/Edit -->

    <script>
        function openAddForm() {
            // Reset the form for adding a new entry
            document.getElementById('manageHomeForm').reset();
            document.getElementById('formMethod').value = 'POST';
            document.getElementById('manageHomeForm').action = "{{ route('admin.manage-home-add') }}";
            document.getElementById('manageHomeModalLabel').innerText = "Add New Entry";
        }

        function openEditForm(data) {
            // Populate the form for editing an entry
            document.getElementById('manageHomeForm').reset();
            document.getElementById('formMethod').value = 'PUT';
            document.getElementById('manageHomeForm').action = "{{ route('admin.manage-home-edit', ':id') }}".replace(':id', data.id);
            document.getElementById('title').value = data.title;
            document.getElementById('status').value = data.status;
            document.getElementById('manageHomeModalLabel').innerText = "Edit Entry";
        }
    </script>

@endsection
