<div>
    @foreach (\App\Models\Document::all() as $document)
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fw-bold">
                        <a class="text-dark text-decoration-none" href="/document/{{ $document->id }}?file=/document/{{ $document->id }}/stream" target="_blank">{{ $document->name }}</a>
                    </h6>
                    <p class="mb-0 text-muted">{{ $document->created_at->format('jS F, Y') }}</p>
                </div>
                <div>
                    <img src="/img/new-gif-icon-10.jpg" alt="NEW" width="42px">
                </div>
            </div>
        </div>
    @endforeach
</div>