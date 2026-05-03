# Vucko — Refero Style

- Refero URL: https://styles.refero.design/style/cc5b19fd-12cf-4b30-801c-8a0363646e48
- Site URL: https://vucko.co
- ID: cc5b19fd-12cf-4b30-801c-8a0363646e48
- Theme: light
- Industry: design
- Created: 2026-04-30T00:34:40.876Z
- Ranks: newest: 758, popular: 1075, trending: 1061

> High-contrast typographic canvas.

## Description

Vucko's design system embodies unadorned precision with a high-contrast monochrome palette. Bold, oversized typography dominates the visual field, creating clear hierarchy through scale rather than color. Surface treatments are flat and minimal, emphasizing content, while subtle border radii apply to interactive elements and showcased cards. The overall effect is one of directness and sophisticated restraint, where motion is implied through scale and interaction rather than explicit graphical flourishes.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Slate Mist | #eeeeee | neutral | Subtle background for UI cards and contained sections, providing a soft lift from the main canvas |
| Warm Gray | #888a8b | neutral | Secondary body text, muted details, and less prominent borders, offering visual relief without losing legibility |
| Deep Gray | #222222 | neutral | Darker background for utility navigation or section separators, creating a deeper tonal shift than slate mist |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| suisse | system-ui, sans-serif | 400, 500, 700 | 17px, 18px, 19px, 43px, 55px, 120px, 211px | 0.70, 1.00, 1.05, 1.13, 1.17, 1.21, 1.50 | The singular typeface for all content. Its commanding presence, especially at large sizes with negative letter-spacing, defines the brand's direct and impactful tone. Monochromatic by default, its role is anchored in its sheer scale and weight for distinction. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 17 | 1.5 | 0 |
| subheading | 19 | 1.5 | 0 |
| heading-sm | 43 | 1.21 | -0.43 |
| heading | 55 | 1.17 | -1.1 |
| heading-lg | 120 | 1.13 | -2.4 |
| display | 211 | 0.7 | -11.9 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "9.6px",
    "buttons": "0px",
    "navItems": "9999px",
    "utilityElements": "4.8px"
  },
  "elementGap": "23px",
  "sectionGap": "58px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Text Link Button (Dark)

**Role:** Interactive text link, border-bottom appears on hover/focus.

Text in Midnight Ink (#000000), 0px border-radius, 0px padding. Activated by a 1px Midnight Ink (#000000) border-bottom.

### Text Link Button (Light)

**Role:** Interactive text link within dark contexts, border-bottom appears on hover/focus.

Text in Canvas White (#ffffff), 0px border-radius, 0px padding. Activated by a 1px Canvas White (#ffffff) border-bottom.

### Showcase Card

**Role:** Display individual portfolio items or content blocks.

No background or box shadow, 0px border-radius, with 0px padding. Visuals are contained within this structure.

### Elevated Showcase Card

**Role:** Highlight specific content or product showcases.

Background of Slate Mist (#eeeeee), 9.6px border-radius, no shadow, with 0px padding. Provides a subtle visual lift.

### Navigation Dot

**Role:** Indicates current section or state in compact navigation.

Small circular element with 9999px radius (effectively a circle), used for navigation status indicators.

## Do's

- Prioritize text scale and weight changes over color for hierarchy; use Midnight Ink (#000000) for primary content and Canvas White (#ffffff) for backgrounds.
- Apply 9.6px border-radius to showcase cards and similar contained content areas for subtle softness.
- Utilize 0px padding and 0px border-radius for ghost buttons/links, relying on a bottom border for interactive states.
- Maintain a spacious density; use 58px as the primary vertical section gap and 23px for element gaps.
- Use Suisse, or its closest sans-serif substitute, for all textual elements in various weights to ensure typographic consistency.
- Employ the negative letter-spacing values provided for larger text sizes to achieve a tightly composed, impactful headline aesthetic.
- Ensure all interactive text elements use a 1px border on hover, matching the text color.

## Don'ts

- Avoid decorative gradients or vivid accent colors; the system is built on a high-contrast achromatic foundation.
- Do not introduce unnecessary shadows or complex layer effects; keep surfaces flat and distinct through background color changes.
- Do not deviate from the specified scale for typography; large sizes have specific line heights and negative letter spacing that are integral to brand identity.
- Avoid using multiple font families; Suisse is the sole typeface.
- Do not add internal padding to cards or buttons, the padding is implied by the surrounding spacing.
- Do not use generic rounded corners; adhere strictly to 9.6px for cards, 0px for buttons, and 9999px for dots.
- Do not use subtle gray borders for actionable items; borders are strong and match the text color.

## Layout

The page adheres to a full-bleed layout, particularly for hero sections and large typographic statements, which extend to the viewport edges. Content within sections, however, often feels implicitly contained by generous horizontal padding. The hero leverages oversized, high-contrast typography, often centered or left-aligned, establishing an immediate impactful presence. Sections exhibit consistent vertical spacing of 58px. Content often alternates between pure typographic blocks and large visual showcases. Navigation is a minimal top bar, featuring right-aligned text links and a utility dot, without a sticky header visible.

## Imagery

Imagery treatment varies between simple black rectangular placeholders for abstract motion concepts and full-bleed product showcases with rounded corners (9.6px). Photography is not dominant. Illustrations are abstract and colorful, often appearing as embedded content rather than primary UI elements, contained within the UI structure. Icons are minimal, primarily filled, and monochrome (Midnight Ink or Canvas White), used for functional navigation cues like a small dot.

## Similar Brands

| Business | Why |
| --- | --- |
| Büro Union | Dominant, bold sans-serif typography, high contrast monochrome palette, and minimal UI elements. |
| Gretel | Heavy reliance on large-scale typography for headlines and a stark, clean visual presentation. |
| Basic Type | Monochromatic design with a focus on type treatment as the primary visual element, subtle use of border radii on content blocks. |
| Huge Inc. | Clean, unadorned aesthetic with large, impactful headlines and a strong emphasis on content over decorative UI. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section: Canvas White (#ffffff) background. Headline 'VUCKO' using Suisse 700 at 211px, Midnight Ink (#000000), letter-spacing -11.9px. Below it, a subtle text link 'Learn more about our approach' using Suisse 400 at 18px, Midnight Ink (#000000), with a 1px Midnight Ink (#000000) border-bottom on hover.
2. Create a navigation link: Text 'Projects' using Suisse 500 at 17px, Midnight Ink (#000000), 0px padding. On hover, apply a 1px Midnight Ink (#000000) border-bottom.
3. Create an elevated content card: Slate Mist (#eeeeee) background, 9.6px border-radius, 0px padding. Inside, place body text 'We create motion systems...' using Suisse 400 at 18px, Midnight Ink (#000000).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509258904-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509258904-thumb.jpg |
