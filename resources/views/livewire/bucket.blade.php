<div>
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            @if (session()->has('message'))
                <div id="bucketMessage" class="alert alert-success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('message') }}</span>
                </div>
            @endif
            
            @if (session()->has('error_message'))
                <div id="bucketMessage" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('error_message') }}</span>
                </div>
            @endif

            <h2 class="card-title">Bucket</h2>
            <form wire:submit.prevent="storeBucket">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Bucket Name</span>
                    </label>
                    <label class="input-group">
                        <input wire:model='bucket_name' type="text" class="input input-bordered input-primary w-full max-w-xs" />
                    </label>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Volume(in Inches)</span>
                    </label>
                    <label class="input-group">
                        <input wire:model='bucket_volume' type="text" class="input input-bordered input-primary w-full max-w-xs" />
                    </label>
                </div>
                
                <div class="card-actions justify-end mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
