<?php
namespace GoogleCloudVideoIntelligence;
use JsonSerializable;

/**
 * Config for LABEL_DETECTION.
 */
class LabelDetectionConfig implements JsonSerializable
{

  /**
  * @var enum
  *
  *What labels should be detected with LABEL_DETECTION in addition to video-level labels or segment-level labels. Possible values include:
  * LABEL_DETECTION_MODE_UNSPECIFIED, SHOT_MODE, FRAME_MODE, SHOT_AND_FRAME_MODE
  */
  protected $labelDetectionMode;

  /**
  * @var bool
  *
  *Whether the video has been shot from a stationary (i.e. non-moving) camera.
  */
  protected $stationaryCamera = false;

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
