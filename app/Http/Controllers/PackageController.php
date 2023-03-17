<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return json_encode($packages);
    }

    public function show($id)
    {
        $package = Package::find($id);
        if (! $package) {
            return json_encode(['message' => 'Package not found']);
        }

        return json_encode($package);
    }

    public function store(Request $request)
    {
        $package = new Package();
        $package->fill($request->all());
        $package->save();

        return json_encode($package, 201, [], JSON_UNESCAPED_UNICODE);
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        if (! $package) {
            return json_encode(['message' => 'Package not found']);
        }
        $package->fill($request->all());
        $package->save();

        return json_encode($package);
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        if (! $package) {
            return json_encode(['message' => 'Package not found']);
        }
        $package->delete();

        return json_encode(['message' => 'Package deleted']);
    }
}
