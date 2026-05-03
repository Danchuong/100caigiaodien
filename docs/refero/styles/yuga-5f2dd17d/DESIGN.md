# Yuga — Refero Style

- Refero URL: https://styles.refero.design/style/5f2dd17d-72e6-4aa4-88e6-6be9e41299ab
- Site URL: https://yuga.com
- ID: 5f2dd17d-72e6-4aa4-88e6-6be9e41299ab
- Theme: dark
- Industry: crypto
- Created: 2026-04-30T01:25:55.779Z
- Ranks: newest: 604, popular: 1038, trending: 1019

> Blocky digital canvas

## Description

Yuga Labs employs a high-contrast digital-native aesthetic, leveraging stark black and white with minimal color accents. Typography is compact and commanding, featuring a proprietary heavy sans-serif that defines the brand's voice. Surfaces are predominantly flat, and interactivity is signaled through subtle highlights and generous border radii, resulting in a bold, direct, and slightly playful presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #000000 | neutral | Page backgrounds, card surfaces, primary text, button backgrounds, interactive borders |
| Cloud Canvas | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Digital Gray | #131313 | neutral | Subtle surface differentiation for elevated elements |
| Lime Glow | #d3de5d | accent | Accent for graphical elements, occasional background tint, or highlights. Its low contrast against white suggests decorative use rather than functional text |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| AK Monument Grotesk | Monument Extended or Space Grotesk | 200, 400, 700, 800 | 14px, 16px, 24px, 26px, 32px, 52px, 102px, 160px | 0.78, 0.82, 0.83, 0.90, 0.94, 1.00, 1.10 | All text elements from body to display headlines. Its proprietary nature and wide range of weights allow for high-impact brand expression. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.1 |  |
| body | 16 | 1.1 |  |
| subheading | 24 | 0.94 |  |
| heading-sm | 26 | 0.94 |  |
| heading | 32 | 0.9 |  |
| heading-lg | 52 | 0.83 | -0.83 |
| display | 102 | 0.82 | -2.04 |
| display-xl | 160 | 0.78 | -3.2 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "30px",
    "links": "40px",
    "buttons": "90px",
    "elements": "30px"
  },
  "elementGap": "15px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action button

Black background (#000000) with white text (#ffffff) using AK Monument Grotesk. Full pill shape with a 90px border-radius, 20px horizontal padding, and minimal vertical padding (0px) for a compact and bold look.

### Navigation Link

**Role:** Primary navigation item

White text (#ffffff) on a dark background, in AK Monument Grotesk at 16px. Can have underline or border on hover and active states. Uses a 40px radius when used as a rounded interactive element.

### Product Display Card

**Role:** Container for product imagery or information

Black background (#000000) with generous 30px border-radius. Contains white or inverse-color content. Padding is likely 20px, giving content breathing room.

### Footer Link

**Role:** Secondary navigation or informational link

White text (#ffffff) in AK Monument Grotesk at smaller sizes (e.g., 14px or 16px). Frequently accompanied by an underline or subtle border on hover.

## Do's

- Prioritize high contrast between foreground (#ffffff) and background (#000000) for all primary content.
- Apply AK Monument Grotesk consistently across all typographic elements, leveraging its varying weights for hierarchy.
- Use 90px border-radius for all primary interactive elements like buttons to achieve a distinct pill shape.
- Maintain a comfortable information density with `elementGap` of 15px and `cardPadding` of 20px.
- Use the Lime Glow accent color (#d3de5d) sparingly for decorative elements or subtle brand highlights, not for essential text or interactive states.

## Don'ts

- Avoid using the Lime Glow accent color (#d3de5d) for large blocks of text or critical interface elements due to its low contrast against light backgrounds.
- Do not introduce additional custom fonts; 'AK Monument Grotesk' is the singular typographic voice.
- Do not use subtle elevation or complex shadow effects; surfaces should remain flat.
- Avoid using standard square or lightly rounded corners; consistently apply 30px-90px radii for a specific blocky-yet-rounded aesthetic.
- Do not deviate from the predominantly dark theme; light sections should be exceptions, not the rule.

## Layout

The page primarily uses a full-bleed structure, often with the main content centered within a maximum-width constraint. The hero section frequently features large, centered headlines over a dark background with dynamic, pixel-like graphic treatments. Sections are distinctly separated, often by background color changes (though mostly black and dark grays). Content arrangement favors centered stacks for headlines and buttons, with multi-column card grids (e.g., 2-column for collections) for showcasing items. Vertical spacing between sections is consistent and generous, creating a spacious and airy feel.

## Imagery

The visual language focuses on bold, abstract, and often monochromatic graphics with a pixelated or blocky aesthetic, reminiscent of early digital art or NFT styles. The Yuga Labs logo itself exemplifies this blocky, 'building block' approach. Product imagery, when present, is tightly cropped and often isolated on black backgrounds, showcasing the asset (e.g., NFT artwork) as the central focus without much context. Icons are simple, outlined, and monochromatic, aligning with the overall high-contrast theme. Imagery plays a decorative and brand-reinforcing role, rather than purely informational or product showcase.

## Similar Brands

| Business | Why |
| --- | --- |
| OpenSea | Dark-mode UI with high-contrast text and prominent visual assets, often in square or rounded containers. |
| Rarible | Blockchain-focused platform with a minimalist dark theme, bold typography, and emphasis on digital collectibles. |
| Foundation | Artist-focused NFT marketplace sharing a dark, high-contrast aesthetic and strong visual branding. |
| Dapper Labs | Web3 company with a dark, modern interface and focus on digital ownership and community. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #000000
accent: #d3de5d
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a large display heading: AK Monument Grotesk weight 800, 160px, line-height 0.78, letter-spacing -3.2px, color #ffffff, on a #000000 background.
2. Create a primary call-to-action button: background #000000, text #ffffff, AK Monument Grotesk 16px, 90px border-radius, 20px horizontal padding, 0px vertical padding.
3. Create a product card: background #000000, 30px border-radius, 20px padding. Inside, place a 'subheading' text label at AK Monument Grotesk weight 700, 24px, line-height 0.94, color #ffffff.
4. Create a footer copyright link: AK Monument Grotesk 14px, color #ffffff, no special adornments by default.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512338722-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512338722-thumb.jpg |
