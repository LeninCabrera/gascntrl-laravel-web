<?php

namespace Tests\Unit;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Provider;
use Tests\TestContractInterface;
use App\Models\Enums\ProviderFields;
use App\Http\Livewire\Provider\ProviderComponent;
use Illuminate\Foundation\Testing\RefreshDatabase;


interface ProviderInterface extends TestContractInterface {
    const MODEL = 'provider';
}

enum ProviderConstants {
    const COMPANY_NAME = 'foo';
    const RESET_FILTERS_FUNCTION = 'resetFilters';
    const SAVE_MODEL_FUNCTION = 'saveModelObject';
    const PROVIDER_MOCK = [ ProviderFields::CompanyName => self::COMPANY_NAME ];
}

class ProviderTest extends TestCase implements ProviderInterface
{
    // Resetting The Database After Each Test
    use RefreshDatabase;

    /**
     * 
     * Test: companyName_is_required
     * assert true whit error required for companyName field in Providers
     * 
     */
    public function test_companyName_is_required()
    {
        Livewire::test(ProviderComponent::class)
            ->set(self::MODEL, [
                ProviderFields::CompanyName => null,
            ])
            ->call(ProviderConstants::SAVE_MODEL_FUNCTION)
            ->assertHasErrors(
                [self::MODEL.'.'.ProviderFields::CompanyName => 'required']
            );
    }

    /**
     * 
     * Test: provider_saved_exists
     * assert true if provider exists
     * 
     */
    public function test_provider_saved_exists()
    {
        Livewire::test(ProviderComponent::class)
            ->set(self::MODEL, ProviderConstants::PROVIDER_MOCK)
            ->call(ProviderConstants::SAVE_MODEL_FUNCTION);
        
        $this->assertTrue(
            Provider::where(ProviderFields::CompanyName, ProviderConstants::COMPANY_NAME)->exists()
        );
    }

    /**
     * 
     * Test: provider_set_and_clear
     * 
     */
    public function test_provider_set_and_clear()
    {
        $livewireProviderComponent = Livewire::test(ProviderComponent::class);

        $provider = $livewireProviderComponent
            ->set(self::MODEL, ProviderConstants::PROVIDER_MOCK)
            ->assertSet(self::MODEL.'.'.ProviderFields::CompanyName, ProviderConstants::COMPANY_NAME)
            ->get(self::MODEL);
        
        $this->assertNotNull($provider);
        $this->assertEquals(ProviderConstants::PROVIDER_MOCK, $provider);

        $providerExcpectNull = $livewireProviderComponent
            ->call(ProviderConstants::RESET_FILTERS_FUNCTION)
            ->get(self::MODEL);
        
        $this->assertNull($providerExcpectNull);
    }
}
