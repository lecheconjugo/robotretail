<!-- ONE COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#ffffff" align="center" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <!-- HERO IMAGE -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="padding-copy">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                          <td>
                                                                <?php 
                                                                    echo
                                                                    $this->Html->image(
                                                                        'cid:prices-done-id',
                                                                        [
                                                                            'width' => 250,
                                                                            'height' => 200,
                                                                            'border' => 0,
                                                                            'alt' => __('Prices Done').'!',
                                                                            'style' => 'display: block;color: #666666;text-decoration: none;font-family: Helvetica,arial,sans-serif;font-size: 16px;width: 250px;height: 200px;margin-bottom: -70px;margin-left:26%;',
                                                                            'class' => 'img-max'
                                                                        ]
                                                                    );
                                                                ?>
                                                          </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy"><?php echo __("Prices updates finished").'!';?></td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy"><?php echo __('The prices of store [{0}] {1} - {2} have been updated at {3}', [$data['store']['store_code'], $data['company']['company_name'], $data['store']['store_name'], date('H:i')]).'.';?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                                <tr>
                                    <td>
                                        <!-- COPY -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="font-size: 17px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy"><?php echo __("Total updates: {0}", $data['stats']['update_count']);?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- COPY -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="font-size: 17px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy"><?php echo __("Total products without price change: {0}", $data['stats']['keep_count']);?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- COPY -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="font-size: 17px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy"><?php echo __("Total new products: {0}", $data['stats']['new_products_count']);?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- COPY -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="font-size: 17px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy"><?php echo __("Total of existing products with new initial price: {0}", $data['stats']['initial_update_count']);?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            <?php //endif;?>
                            <!--<tr>
                                <td>
                                    
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">
                                                <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                    <tr>
                                                        <td align="center">
                                                            <?php echo 
                                                                $this->Html->link(
                                                                    __('Confirm my attendance'),
                                                                    '#',
                                                                    [
                                                                        'target' => '_blank',
                                                                        'style' => 'font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #5D9CEC; border-top: 15px solid #5D9CEC; border-bottom: 15px solid #5D9CEC; border-left: 25px solid #5D9CEC; border-right: 25px solid #5D9CEC; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;',
                                                                        'class' => 'mobile-button'
                                                                    ]
                                                                );
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>-->
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>