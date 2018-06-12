<?php
namespace GoogleCloudVideoIntelligence;
use JsonSerializable;

/**
 * Video context and/or feature-specific parameters.
 */
class VideoContext
{

  /**
  * @var array
  *
  *Video segments to annotate.
  */
  protected $segments = array();

  /**
  * @var LabelDetectionConfig
  *
  *Config for LABEL_DETECTION.
  */
  protected $labelDetectionConfig;

  /**
  * @var ShotChangeDetectionConfig
  *
  *Config for SHOT_CHANGE_DETECTION. 
  */
  protected $shotChangeDetectionConfig;

  /**
  * @var ExplicitContentDetectionConfig
  *
  *Config for EXPLICIT_CONTENT_DETECTION.
  */
  protected $explicitContentDetectionConfig;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
