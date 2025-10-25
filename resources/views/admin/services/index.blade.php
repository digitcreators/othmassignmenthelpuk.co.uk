@extends('layouts.admin')
@section('content')

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Services</h5>
                                <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary my-auto"> {{ trans('global.create') }} {{ trans('cruds.service.title_singular') }} </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Cononical</th>
                                        <th scope="col">Published</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td> {{$service->name ?? "-"}} </td>
                                        <td> {{$service->slug ?? "-"}} </td>
                                        <td> {{$service->canonical ?? "-"}} </td>
                                        <td>
                                            @if ($service->is_published)
                                                <span class="badge bg-success p-2 ms-2">{{ 'Published' }}</span>
                                            @else
                                                <span class="badge bg-danger p-2 ms-2">{{ 'Not Publish' }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- {{ route('admin.services.show', [$service->slug]) }} --}}
                                            <div class="btn-group" >
                                                <a href='' target="_blank" service='button' class='btn btn-sm btn-primary'> <i class='fa fa-eye' ></i> </a>
                                                <a href='{{ route('admin.services.edit', [$service->id]) }}' service='button' class='btn btn-sm btn-info'> <i class='fa fa-edit' ></i> </a>
                                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure? This will delete all related data also.');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
