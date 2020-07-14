<?php

namespace Krystal\Katapult\Resources\Organization\VirtualMachine;

use Krystal\Katapult\Traits\Makeable;
use Spatie\ArrayToXml\ArrayToXml;

class DefaultVmBuildSpec
{
    use Makeable;

    private $hostname = null;
    private $datacenterId;
    private $memory;
    private $cpuCores;
    private $systemDiskSize;
    private $systemDiskSpeed;
    private $diskTemplateId;
    private $primaryNetworkId;
    private $packageId;

    public function __toString()
    {
        return $this->toXml();
    }

    /**
     * @return string
     */
    public function toXml()
    {
        $spec = [
            'DataCenter' => [
                '_attributes' => ['by' => 'id'],
                '_value' => $this->datacenterId,
            ],

            'DiskTemplate' => [
                'DiskTemplate' => [
                    '_attributes' => ['by' => 'id'],
                    '_value' => $this->diskTemplateId,
                ],

                'Option' => [
                    [
                        '_attributes' => ['key' => 'use_previous_ssh_host_key'],
                        '_value' => '',
                    ],

                    [
                        '_attributes' => ['key' => 'keyboard_layout'],
                        '_value' => 'gb',
                    ],

                    [
                        '_attributes' => ['key' => 'install_agent'],
                        '_value' => 'true',
                    ]
                ],
            ],

            'BackupPolicies' => [
                'BackupPolicy' => [
                    [
                        'Retention' => 20,
                        'Schedule' => [
                            'Interval' => 'weekly',
                            'Frequency' => 3,
                            'Time' => 1
                        ]
                    ],

                    [
                        'Retention' => 2,
                        'Schedule' => [
                            'Interval' => 'hourly',
                            'Frequency' => 3,
                        ]
                    ]
                ]
            ],

            'NetworkInterfaces' => [
                'NetworkInterface' => [
                    [
                        'Network' => [
                            '_attributes' => ['by' => 'id'],
                            '_value' => $this->primaryNetworkId
                        ],
                        'IPAddressAllocation' => [
                            [
                                '_attributes' => ['type' => 'new'],
                                'Version' => 4
                            ]
                        ]
                    ]
                ]
            ],

            'AuthorizedKeys' => [
                'Users' => [
                    '_attributes' => ['all' => 'yes'],
                    '_value' => '',
                ],

                'SSHKeys' => [
                    '_attributes' => ['all' => 'yes'],
                    '_value' => '',
                ]
            ]
        ];

        if($this->packageId)
        {
            $spec['Resources'] = [
                'Package' => $this->packageId
            ];
        }
        else
        {
            $spec['Resources'] = [
                'Memory' => $this->memory,
                'CPUCores' => $this->cpuCores
            ];

            $spec['SystemDisks'] = [
                'Disk' => [
                    [
                        'Name' => 'System Disk',
                        'Size' => $this->systemDiskSize,
                        'Speed' => $this->systemDiskSpeed
                    ]
                ]
            ];
        }

        if($this->hostname)
        {
            $spec['Hostname'] = [
                'Hostname' => $this->hostname
            ];
        }
        else
        {
            $spec['Hostname'] = [
                'Hostname' => [
                    '_attributes' => ['type' => 'random'],
                    '_value' => '',
                ]
            ];
        }

        return ArrayToXml::convert($spec, 'VirtualMachineSpec');
    }

    /**
     * @param mixed $memory
     * @return DefaultVmBuildSpec
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
        return $this;
    }

    /**
     * @param mixed $systemDiskSize
     * @return DefaultVmBuildSpec
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->systemDiskSize = $systemDiskSize;
        return $this;
    }

    /**
     * @param mixed $diskTemplateId
     * @return DefaultVmBuildSpec
     */
    public function setDiskTemplateId($diskTemplateId)
    {
        $this->diskTemplateId = $diskTemplateId;
        return $this;
    }

    /**
     * @param mixed $cpuCores
     * @return DefaultVmBuildSpec
     */
    public function setCpuCores($cpuCores)
    {
        $this->cpuCores = $cpuCores;
        return $this;
    }

    /**
     * @param mixed $datacenterId
     * @return DefaultVmBuildSpec
     */
    public function setDatacenterId($datacenterId)
    {
        $this->datacenterId = $datacenterId;
        return $this;
    }

    /**
     * @param mixed $packageId
     * @return DefaultVmBuildSpec
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @param mixed $primaryNetworkId
     * @return DefaultVmBuildSpec
     */
    public function setPrimaryNetworkId($primaryNetworkId)
    {
        $this->primaryNetworkId = $primaryNetworkId;
        return $this;
    }

    /**
     * @param mixed $systemDiskSpeed
     * @return DefaultVmBuildSpec
     */
    public function setSystemDiskSpeed($systemDiskSpeed)
    {
        $this->systemDiskSpeed = $systemDiskSpeed;
        return $this;
    }

    /**
     * @param mixed $hostname
     * @return DefaultVmBuildSpec
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        return $this;
    }
}

