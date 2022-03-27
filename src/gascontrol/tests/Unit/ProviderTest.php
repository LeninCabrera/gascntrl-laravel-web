<?php

namespace Tests\Unit;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Provider;
use App\Http\Livewire\Provider\ProviderComponent;

class ProviderTest extends TestCase
{
    /**
     * 
     * Test: companyName_is_required
     * assert true whit error required for companyName field in Providers
     * 
     */
    public function test_companyName_is_required()
    {
        Livewire::test(ProviderComponent::class)
            ->set('provider', [
                'companyName' => null,
            ])
            ->call('saveModelObject')
            ->assertHasErrors(['provider.companyName' => 'required']);
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
            ->set('provider', ['companyName' => 'testName'])
            ->call('saveModelObject');
        
        $this->assertTrue(Provider::where('companyName', 'testName')->exists());
    }

    /**
     * 
     * Test: provider_set_and_clear
     * 
     */
    public function test_provider_set_and_clear()
    {
        $providerMock = [
            'companyName' => 'testName'
        ];

        $providerComponentTest = Livewire::test(ProviderComponent::class);

        $provider = $providerComponentTest
            ->set('provider', ['companyName' => 'testName'])
            ->assertSet('provider.companyName', 'testName')
            ->get('provider');
        
        $this->assertNotNull($provider);
        $this->assertEquals($providerMock, $provider);

        $providerExcpectNull = $providerComponentTest
            ->call('resetFilters')
            ->get('provider');
        
        $this->assertNull($providerExcpectNull, 'The clear method no working!');
    }
}
