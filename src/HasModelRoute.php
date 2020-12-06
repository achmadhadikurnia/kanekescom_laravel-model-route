<?php

namespace Kanekescom\LaravelModelRoute;

trait HasModelRoute
{
    /**
     * Create model_route attribute.
     *
     * @return void
     */
    public function getModelRouteAttribute()
    {
        return $this->modelRouteLoader();
    }

    /**
     * The additional method.
     */
    public function routeParam()
    {
        return request()->route()->parameter($this->param);
    }

    /**
     * The additional method.
     */
    public function modelRouteLoader()
    {
        return optional($this::find($this->routeParam()));
    }
}
