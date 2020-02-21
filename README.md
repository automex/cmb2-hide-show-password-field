# cmb2-hide-show-password-field
Adds a Hide/Show Password Field to CMB2.
## Usage
```
$amex_metabox = new_cmb2_box( array(
    'title' => __('Metabox', 'myprefix'),
    'id'    => 'amex_hide_show_field_type_demo'
));

$amex_metabox_fields = $amex_metabox->add_field(array(
    'name' => __( 'Hide/show field', 'myprefix'),
    'id'   => 'amex_custom_field',
    'type' => 'hide_show_password'
));

$amex_metabox_fields = $amex_metabox->add_field(array(
    'name' => __( 'Hide/show field medium', 'myprefix'),
    'id'   => 'amex_custom_field_m',
    'type' => 'hide_show_password_medium'
));
```

## Screenshot
<img src="screenshot.PNG" alt="screenshot" width="70%" />

# License
The code and the documentation are released under the [GPLv3 License](LICENSE).
