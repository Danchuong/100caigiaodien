# Gamma — Refero Style

- Refero URL: https://styles.refero.design/style/4782832c-1c23-4fe3-997c-2a08d7b6c5d1
- Site URL: https://www.gamma.io
- ID: 4782832c-1c23-4fe3-997c-2a08d7b6c5d1
- Theme: dark
- Industry: crypto
- Created: 2026-04-30T00:58:01.165Z
- Ranks: newest: 655, popular: 650, trending: 490

> Dark Canvas, Gradient Hues — a digital gallery where art glows against a deep, minimal backdrop.

## Description

Gamma operates with a high-contrast dark theme, emphasizing content through a stark white-on-black typography and subtle achromatic surfaces. Its visual personality is defined by playful gradients and abstract, colorful backgrounds that create a vibrant stage for digital art, contrasting sharply with the otherwise monochrome UI. Interactive elements feature generous curves, while information surfaces maintain sharp edges or a slight radius, creating distinct visual roles against the dark canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0c0c0d | neutral | Primary text, surface borders, background for interactive elements, body text, primary icons |
| Ghostly Gray | #e9e9ec | neutral | Secondary text, subtle borders, inactive states. Lighter neutral for contrasting buttons on dark backgrounds |
| Carbon Surface | #1d1d1e | neutral | Elevated card backgrounds, slightly lighter than the primary background to create subtle depth |
| Silver Haze | #808080 | neutral | Muted text, tertiary icons, borders on dark surfaces for lower contrast elements |
| Canvas White | #ffffff | neutral | Primary background for light-themed sections, text on dark interactive elements, card backgrounds in lighter contexts |
| Slate Echo | #242629 | neutral | Slightly darker secondary text, borders, and icons, often used as an accent on light interface elements |
| Verdant Aura | #069347 | accent | Green decorative accent for icons, marks, and small graphic details. Use as a supporting accent, not as a status color |
| Aurora Swirl | #e0a6b5 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gamma Sans Display | Inter | 300, 400, 600 | 12px, 14px, 16px, 18px, 20px, 24px, 32px, 40px, 48px, 72px | 1.15, 1.17, 1.20, 1.25, 1.33, 1.43, 1.50 | Primary typeface for all headings, body text, and UI elements. Its strong, geometric structure and varied weights establish a confident yet approachable tone. Letter spacing is subtly adjusted to optimize readability across large display sizes and smaller labels. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.33 | 0.276 |
| body-sm | 14 | 1.43 | 0.322 |
| body | 16 | 1.5 | 0.32 |
| subheading | 18 | 1.5 | 0.36 |
| heading | 24 | 1.25 | 0.24 |
| heading-lg | 32 | 1.25 | -0.16 |
| display | 72 | 1.15 | -0.36 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "inputs": "999px",
    "buttons": "999px",
    "default": "8px",
    "round-corners-for-image": "4px"
  },
  "elementGap": "4px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Pill Button

**Role:** Flexible interface button

A ghost button with a very high border-radius (999px) for a pill shape, backgroundColor=rgba(0,0,0,0.05), text color #242629, and 0px vertical padding with 12px horizontal padding. Often functions as a filter or category tag.

### Link Button

**Role:** Text-based actions

A minimal, text-only button with no background or padding, color #0c0c0d, and 0px border-radius. Used for navigation and inline calls to action where visual weight should be minimal.

### CTA Button Large

**Role:** Primary action within a card or hero

A prominent button with a subtle, translucent white background (rgba(255,255,255,0.1)), text color #efefef, 8px border-radius, and generous 16px vertical by 24px horizontal padding. This button offers high contrast on dark backgrounds.

### Muted Text Button

**Role:** Subtle, secondary actions

A ghost button with rgba(0,0,0,0) background, color rgba(0,0,0,0.5), and 0px border-radius, often used for subordinate actions or links that should not distract from primary elements.

### Informational Card

**Role:** Container for content sections

A card with backgroundColor=rgba(0,0,0,0.05), 8px border-radius, and 20px padding on all sides. Used for displaying collections or status updates in a uniform, contained block.

### Contextual Detail Card

**Role:** Full-bleed detail card

A card with rgba(0,0,0,0) background, 0px border-radius, and 32px padding, used for main content display where the background image or gradient provides the visual context.

### Subtle Detail Card

**Role:** Minimal information display card

A card with a very subtle background (rgba(0,0,0,0.02)), 8px border-radius, and no padding, suggesting a tight integration with the surrounding content or acting as a very light divider.

### Search Input

**Role:** Search and data entry

A pill-shaped input field (999px border-radius) with a light, transparent background (rgba(0,0,0,0.03)), #0c0c0d text, and 12px vertical by 48px left / 20px right padding to accommodate an icon.

## Do's

- Use Midnight Ink (#0c0c0d) for all primary text and important borders to maintain high contrast on dark backgrounds.
- Apply a 999px border-radius to all interactive buttons and inputs, creating a consistent 'pill' visual style.
- Utilize the Aurora Swirl gradient (linear-gradient(...) ending #dc94d5) for hero sections and expressive background areas to inject visual vibrancy.
- Maintain a comfortable rhythm across sections using a 40px `sectionGap` and a base unit of 4px for all element-level spacing.
- On dark surfaces, employ Canvas White (#ffffff) for primary text and Ghostly Gray (#e9e9ec) for secondary text to ensure readability.
- Structure informational blocks with Informational Cards (backgroundColor=rgba(0,0,0,0.05), 8px radius, 20px padding) to create clear content boundaries.
- Use Gamma Sans Display at 72px with -0.36px letter spacing for all prominent display headlines.

## Don'ts

- Avoid using highly saturated, single-color backgrounds for main content areas; rely on the subtle neutral surfaces or expressive gradients.
- Do not use sharp 0px radius corners on interactive elements; inputs and buttons must always be pill-shaped with 999px radius.
- Never introduce bold or bright colors as primary background for UI elements, reserving them strictly for artwork, gradients, and subtle accents.
- Do not add additional drop shadows to cards or interactive elements; elevation is primarily achieved through background transparency and color slight shifts.
- Avoid generic system fonts; `Gamma Sans Display` with its specified weights and letter spacing is critical for brand identity.
- Do not use letter-spacing greater than 0.32px on body text sizes; this is an expressive display font and needs controlled tracking.

## Layout

The page model is primarily a max-width contained layout, though hero sections often break out to full-bleed. The hero pattern features a full-viewport abstract gradient background with a large, centered headline and text over it, creating a strong visual impact. Section rhythm alternates between full-bleed vibrant graphical sections, subtle dark gray bands, and pure white informational sections, creating varied visual breaks. Content is often arranged in prominent centered stacks for headlines and key information, or in two-column text-left/image-right (or art-right) patterns. Feature grids are common, utilizing 2-column or 3-column layouts for collections. The layout ranges from spacious breathing room in hero and section gaps to more compact information-dense card grids. Navigation consistently employs a sticky top bar with minimal links and a prominent search input.

## Imagery

The site's imagery is characterized by a mix of abstract digital art and product screenshots of NFTs, often displayed within card components. Photography is largely absent. Illustrations are stylized, either geometric-abstract or more organic, in vibrant, often gradient-infused colors that contrast sharply with the dark UI. Icons are simple, outlined, and monochromatic, taking on the surrounding text color. Imagery serves as decorative atmosphere, explanatory content for digital assets, and product showcases, occupying significant visual space to highlight the art itself. There's a deliberate choice for contained display, either within clearly defined cards with subtle radii or as full-bleed backgrounds for hero sections, often blurred or desaturated to allow text to stand out.

## Similar Brands

| Business | Why |
| --- | --- |
| OpenSea | Similar dark-mode UI focusing on digital collectibles, with art as the vibrant focal point against a subdued background. |
| Foundation | Employs high-contrast typography and a clean exhibition-like feel for displaying NFTs, often with rich media backgrounds. |
| SuperRare | Uses dark themes and focuses on individual art pieces, often leveraging rich, colorful content against minimalistic UI elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0c0c0d
background: #0c0c0d
border: #0c0c0d
accent: #e0a6b5
primary action: #0c0c0d (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #0c0c0d background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Build a search input: Search Input (backgroundColor=rgba(0,0,0,0.03), #0c0c0d text, 999px radius, 12px vertical 48px left / 20px right padding). Prefix the placeholder 'Search collections, artists...' with a search icon.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510621655-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510621655-thumb.jpg |
