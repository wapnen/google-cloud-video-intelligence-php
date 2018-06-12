<?php
namespace GoogleCloudVideoIntelligence;
use JsonSerializable;

/**
 * Config for SHOT_CHANGE_DETECTION.
 */
class ShotChangeDetectionConfig implements JsonSerializable
{

  /**
  * @var string
  *
  *Model to use for label detection.
  */
  protected $model;
  
  function __construct(argument)
  {
    # code...
  }
}
 ?>
