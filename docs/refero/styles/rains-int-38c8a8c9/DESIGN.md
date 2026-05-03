# Rains INT — Refero Style

- Refero URL: https://styles.refero.design/style/38c8a8c9-4d2e-462a-bff0-80c9d9619ef2
- Site URL: https://www.rains.com
- ID: 38c8a8c9-4d2e-462a-bff0-80c9d9619ef2
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T00:29:15.946Z
- Ranks: newest: 785, popular: 1283, trending: 1266

> Monochromatic Canvas, Bold Interruption

## Description

Rains INT uses a refined monochrome aesthetic focused on clean surfaces and confident typography. The visual language emphasizes product and fashion photography, with UI elements acting as subtle guides. A primary black serves text and button backgrounds, contrasted with a nearly white background, while a unique yellow is reserved for high-impact headlines, creating a striking yet minimal brand statement. Components are lightweight with generous soft radii, allowing imagery and bold type to dominate the visual hierarchy.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Fog | #efefef | neutral | Page backgrounds, subtle card accents, hairline borders, ghost button borders |
| Midnight Ink | #10100f | neutral | Primary text, icon fills, dominant button text |
| Pure Arctic | #ffffff | neutral | High-contrast text on dark backgrounds, selected button text |
| Deep Graphite | #26292a | neutral | Primary action button backgrounds |
| Bright Solar | #fffb85 | brand | Hero headline text accent—a jarring, high-impact brand statement |
| Subtle Gray | #b3b3b2 | neutral | Muted text, helper text, secondary list items |
| Dark Button | #40403f | neutral | Alternative dark button background (less prominent than Deep Graphite) |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| EuropaGroNr2SB | Open Sans | 400 | 12px, 14px | 1.20 | Body text, navigation items, secondary labels, and button text, maintaining a consistent, compact feel across the interface. |
| EuropaGroNr2SH | Open Sans | 400, 600, 700 | 14px, 16px, 20px, 32px, 40px, 48px, 232px, 245px | 0.90, 1.00, 1.02, 1.20 | Headlines, product titles, and other prominent text. The very large sizes (232px, 245px) are reserved for a signature brand headline, prioritizing visual impact over conventional sizing. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body | 14 | 1.2 |  |
| heading | 20 | 1.02 |  |
| heading-lg | 32 | 1.2 |  |
| display-sm | 40 | 1 |  |
| display | 48 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "other": "9999px",
    "buttons": "9999px"
  },
  "elementGap": "16px",
  "sectionGap": "40px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Filled Primary Button

**Role:** Primary calls to action, prominent interactive elements.

Background: Deep Graphite (#26292a), Text: Pure Arctic (#ffffff). Padding: 12px vertical, 32px horizontal. Border radius: 9999px (pill-shaped).

### Ghost Secondary Button

**Role:** Secondary actions that need to de-emphasize visual weight.

Background: rgba(227, 227, 227, 0.52), Text: Midnight Ink (#10100f). Padding: 0px vertical, 16px horizontal. Border radius: 9999px.

### Bare Navigation Link

**Role:** Top-level navigation items and in-text links.

No background or padding, text color: Midnight Ink (#10100f). Used for main navigation and inline links.

### Transparent Dark Button

**Role:** Alternative dark button with transparent background for subtle interaction.

Background: rgba(16, 16, 15, 0.8), Text: Pure Arctic (#ffffff). Padding: 12px vertical, 32px horizontal. Border radius: 9999px.

## Do's

- Use Midnight Ink (#10100f) as the primary text color on Canvas Fog (#efefef) backgrounds for optimal contrast (contrast ratio 19.0:1 AAA).
- Apply Deep Graphite (#26292a) for primary action button backgrounds, ensuring text is Pure Arctic (#ffffff).
- Reserve Bright Solar (#fffb85) exclusively for high-impact display headlines to maintain its unique visual weight.
- Utilize 9999px border-radius generously on interactive elements like buttons and chips to create a soft, approachable feel.
- Maintain a comfortable density with a consistent element gap of 16px between most UI components.
- Use EuropaGroNr2SH at large sizes and higher weights (600, 700) for headlines and brand text to emphasize a bold, striking impression.
- Ensure hairline borders across the design use Canvas Fog (#efefef) for subtle structural definition.

## Don'ts

- Avoid using Bright Solar (#fffb85) for body text or small labels; its high contrast and light nature make it unsuitable for readability at small sizes.
- Do not introduce additional saturated colors; maintain the brand's monochromatic palette with Bright Solar as the only chromatic accent.
- Do not use sharp 0px border radii on buttons or interactive elements; the 9999px pill shape is a core brand identifier.
- Avoid heavy drop shadows or strong elevation; the design emphasizes flat surfaces with minimal depth.
- Do not deviate from the EuropaGroNr2SB and EuropaGroNr2SH font families; font consistency is crucial to the brand's aesthetic.
- Never use generic blue as a link color; standard links should default to Midnight Ink (#10100f) or Subtle Gray (#b3b3b2).

## Layout

The page primarily uses a full-bleed structure for hero sections, seamlessly integrating large-scale imagery and typography. Subsequent content sections alternate between full-width blocks and sections with a subtle max-width constraint for text-heavy areas. The section rhythm is primarily driven by consistent vertical spacing (40px). Content is arranged in a fluid manner, ranging from superimposed text over full-bleed images to simple adjacent blocks of text and visuals without a rigid grid. Navigation is a compact sticky header with text links, maintaining a minimal presence at the top.

## Imagery

The imagery features professional fashion photography with a focus on product and lifestyle, often presented in large-scale, sometimes full-bleed layouts. Models are styled in the brand's apparel, creating a contemporary, editorial feel. Products are frequently showcased in context, against minimalist backgrounds or urban settings. The photos have a slightly desaturated or muted color palette overall, allowing the UI elements and specific product colors to stand out. Icons are minimal, utilizing either the Midnight Ink or Pure Arctic tones for outlines or solid fills, maintaining a clean, utilitarian aesthetic.

## Similar Brands

| Business | Why |
| --- | --- |
| Arc'teryx | High-performance apparel brand with a focus on product photography, monochromatic palettes with an occasional single accent color, and minimalist typography. |
| A.P.C. | Fashion brand known for clean, understated design, strong emphasis on photography, and a subdued, neutral color scheme with minimal UI ornamentation. |
| COS | Fashion retailer featuring large-scale editorial photography, a minimalist layout, and a predominantly achromatic color palette for its UI. |
| Oura Ring | Tech-fashion blend with clean UI, emphasis on product visuals, and a concise use of typography against light/dark backgrounds. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #10100f
background: #efefef
border: #efefef
accent: #fffb85
primary action: #26292a (filled action)

Example Component Prompts:
Create a hero section: Full-width background image. Large headline (size 245px or 232px, weight 400) in Bright Solar (#fffb85). Subtext: 'Now for all forecasts.' (EuropaGroNr2SB, size 14, weight 400, Pure Arctic #ffffff). Directly below, two Ghost Secondary Buttons: 'Shop the collection' and 'Explore the campaign' (background rgba(227, 227, 227, 0.52), text Midnight Ink #10100f, 9999px radius, 0px vertical 16px horizontal padding).

Create a product category card: Background Canvas Fog (#efefef), with a prominent product image spanning the top. Title (EuropaGroNr2SH, size 16, weight 400, Midnight Ink #10100f) below the image. Simple 'Shop [Category]' Bare Navigation Link (EuropaGroNr2SB, size 14, weight 400, Midnight Ink #10100f).

Create a primary call-to-action block: Centered text 'Explore TexXel' (EuropaGroNr2SH, size 20, weight 400, Pure Arctic #ffffff). Below it, a Filled Primary Button 'Shop TexXel' (background Deep Graphite #26292a, text Pure Arctic #ffffff, 9999px radius, 12px vertical 32px horizontal padding).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508931889-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508931889-thumb.jpg |
