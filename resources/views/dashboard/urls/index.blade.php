<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url-Shorter</title>
</head>
<body>
    @include('dashboard.layouts.layout');

    <div class="container">
        <h2 style="text-align: center"> Links </h2>
        <div class="card">
            <div class="card-header">
                <form action="{{route('generate.shorten.links')}}" method="POST">
                    @csrf
                    @method('Post')
                    <div class="input-group mb-3">
                        <input type="text" name="orignlink"  placeholder="Linker" class="form-control">
                        <button type="submit" class="btn btn-primary" id="">Generate Linke</button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Original Links</th>
                        <th>Abbreviated Links</th>
                        <th>Visitors Counts</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($urls as $item)
                      <tr>
                        <td>{{$item->orignlink}}</td>
                        <td><a target="_blank" href="{{route('show.shorten.url', $item->abbreviatedlink)}}">{{url('').'/'. $item->abbreviatedlink}}</a></td>
                        <td>{{$item->visitors_count}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>

</body>
</html>