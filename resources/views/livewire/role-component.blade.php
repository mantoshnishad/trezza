<div>
    @livewire('component.chetak-grid',
    [
    'headings' => [
    [
    'id' => 1,
    'label' => 'Role Name',
    'field' => 'role_name',
    'field_type' => 'text',
    'filter' => true,
    'editable' => true,
    ],
    [
    'id' => 2,
    'label' => 'Role Desc',
    'field' => 'role_desc',
    'field_type' => 'text',
    'filter' => true,
    'editable' => true,
    ],
    ],
    'table'=>'roles',
    'where_con'=>null,
    'per_page_items' => 30,
    'inline_edit' => true,
    'deletable' => true,
    'editable' => true,
    'addable' => true,
    'viewable' => true,
    'exportable' => true,
    'raw_query'=>null,
    ],
    key('chetak-grid_role'.now()))
</div>