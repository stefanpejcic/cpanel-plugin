<div class="mt-3">

    <p>
        <a href="{{asset('/index.cgi')}}" class="btn btn-outline-primary">Back to Microweber Plugin</a>
    </p>

    @if($this->installedSuccess)
        <div class="alert alert-success">Application is installed successful.</div>
    @endif

    <h4>
        {{$this->appInstallation->domain}}
    </h4>
    <a href="{{$this->appInstallation->url}}" target="_new">{{$this->appInstallation->url}}</a>

    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="modules-tab" data-bs-toggle="tab" data-bs-target="#modules" type="button" role="tab" aria-controls="modules" aria-selected="false">Modules</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="templates-tab" data-bs-toggle="tab" data-bs-target="#templates" type="button" role="tab" aria-controls="templates" aria-selected="false">Templates</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="database-tab" data-bs-toggle="tab" data-bs-target="#database" type="button" role="tab" aria-controls="database" aria-selected="false">Database</button>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">

            <br />
            <h5>Details</h5>
            <span>App version is: </span> <b>{{$this->appInstallation->version}}</b> <br />
            <span>App creation date:</span> <b>{{$this->appInstallation->created_at}}</b><br />
            <br />
            <br />

            <h5>Supported Languages ({{count($this->appInstallation->supported_languages)}})</h5>
            @if(!empty($this->appInstallation->supported_languages))
                @foreach($this->appInstallation->supported_languages as $language=>$languageName)
                    {{$languageName}} &nbsp;
                @endforeach
            @else
                No languages installed
            @endif

            <hr />

            <div class="row">
                <div class="col-md-2">
                {{--<button class="btn btn-outline-success" wire:click="update()">Update</button>--}}

                @if($this->confirmLoginAsAdmin)
                    <a href="{{$this->confirmLoginAsAdmin}}" target="_new" class="btn btn-outline-success">Confirm login</a>
                @else
                    <button class="btn btn-outline-success" wire:click="loginAsAdmin()">Login as Admin</button>
                    <div wire:loading wire:target="loginAsAdmin">
                        Generating token ...
                    </div>
                @endif
                </div>
                <div class="col-md-6">
                @if($this->confirmUninstall)
                    <button class="btn btn-outline-danger" wire:click="uninstall()">Are you sure?</button>
                @else
                    <button class="btn btn-outline-danger" wire:click="confirmUninstall()">Uninstall</button>
                @endif
                </div>
            </div>
        </div>
        <div class="tab-pane" id="modules" role="tabpanel" aria-labelledby="modules-tab" tabindex="0">

            <br />

            <h5>Installed Modules ({{count($this->appInstallation->supported_modules)}})</h5>
            @if(!empty($this->appInstallation->supported_modules))
                @foreach($this->appInstallation->supported_modules as $module)
                    {{$module['name']}} (v{{$module['version']}}) &nbsp;
                @endforeach
            @else
                No modules installed
            @endif


        </div>
        <div class="tab-pane" id="templates" role="tabpanel" aria-labelledby="templates-tab" tabindex="0">

            <br />

            <h5>Supported Templates ({{count($this->appInstallation->supported_templates)}})</h5>
            @if(!empty($this->appInstallation->supported_templates))
                @foreach($this->appInstallation->supported_templates as $template)
                    {{$template['name']}} (v{{$template['version']}}) &nbsp;
                @endforeach
            @else
                No templates installed
            @endif

        </div>
        <div class="tab-pane" id="database" role="tabpanel" aria-labelledby="database-tab" tabindex="0">
            No details
        </div>
    </div>

</div>
