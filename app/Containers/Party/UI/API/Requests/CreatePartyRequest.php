<?php

namespace App\Containers\Party\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreatePartyRequest.
 */
class CreatePartyRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\Party\Data\Transporters\CreatePartyTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        // 'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:60',
            'description' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'started_at' => 'required|date',
            'ended_at' => 'required|date',
            'music' => 'boolean',
            'karaoke' => 'boolean'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
