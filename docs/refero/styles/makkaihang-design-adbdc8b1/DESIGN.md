# makkaihang design — Refero Style

- Refero URL: https://styles.refero.design/style/adbdc8b1-be46-4d4c-a973-5022f6fd381e
- Site URL: https://makkaihang.com
- ID: adbdc8b1-be46-4d4c-a973-5022f6fd381e
- Theme: dark
- Industry: design
- Created: 2026-04-30T01:28:14.369Z
- Ranks: newest: 593, popular: 375, trending: 236

> Midnight canvas, silver thread

## Description

The makkaihang design system establishes a minimal, almost invisible interface ethos. A stark charcoal canvas serves as the dominant background, providing a neutral backdrop for content. Text is a bright white, ensuring high contrast. Subtle light gray borders are used sparingly for visual segmentation rather than heavy containers. The overall aesthetic suggests an emphasis on content and unadorned presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon | #1a1a1a | neutral | Page background (primary canvas), deeply recessed surfaces |
| Frost | #ffffff | neutral | Light text on dark surfaces, inverse labels, and high-contrast captions. Do not promote it to the primary CTA color |
| Smoke | #e5e7eb | neutral | Hairline borders, subtle dividers, ghost button outlines — providing minimal separation on dark backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Untitled Sans | Inter | 400 | 14px | 1.50 | Primary typeface for all text content, including headings, body, and navigation. Its singularity at a single weight and size reinforces the minimalist and content-focused approach. |
| ui-sans-serif |  | 400 | 16px | 1.5 | ui-sans-serif — detected in extracted data but not described by AI |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "12px",
  "sectionGap": "32px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Border Button

**Role:** Interactive Element

Transparent background, white text (#ffffff), and a light gray (#e5e7eb) bottom border. Used for navigation links and subtle actions. Features a 0px border-radius, emphasizing sharp, unadorned interaction points. Padding is absent.

### Naked Card

**Role:** Content container

Transparent background, no border, no shadow, and 0px border-radius. These cards serve as purely semantic groupings, relying on content and spacing for definition rather than visual affordances. No padding is applied.

## Do's

- Always use Carbon (#1a1a1a) for primary page backgrounds to maintain the deep, dark ambiance.
- Render all primary text in Frost (#ffffff) to ensure readability against dark surfaces.
- Employ Smoke (#e5e7eb) for all borders and subtle separators, keeping visual distractions to a minimum.
- Use Untitled Sans (or a suitable substitute) at weight 400 for all typographic elements, prioritizing content clarity over size-based hierarchy.
- Maintain 0px border-radius across all UI elements for a consistently sharp and unadorned aesthetic.
- Utilize 12px for horizontal and vertical element separation within components or content blocks.
- Apply 32px as the standard vertical spacing between distinct content sections.

## Don'ts

- Avoid using any vibrantly saturated colors; restrict the palette to the defined achromatic grays.
- Do not introduce shadows or elevation; surfaces should remain flat and blend with the background.
- Never use rounded corners on any UI element; the design mandates strict 0px radii.
- Refrain from altering font sizes or weights for hierarchy; rely on spacing and position for emphasis.
- Do not use background colors on buttons or cards; maintain a 'ghost' or 'naked' appearance.
- Avoid using decorative imagery or complex illustrations; the focus is on clean UI and textual content.
- Do not vary paragraph line heights; maintain the established 1.5 ratio for all body text.

## Layout

The page maintains a full-bleed, uncontained content model, with no defined `pageMaxWidth`. The headers and navigation are integrated into this full-width presentation. Content appears to be structured in blocks, with 32px vertical gaps separating major sections. The navigation and header elements are positioned at the top of the page, potentially overlapping or layering content. Minimal layout elements are used, giving the feeling of content floating on a dark canvas, with an absence of clear grid structures outside of basic vertical and horizontal spacing.

## Imagery

The visual language is characterized by an absence of imagery on the page itself, relying instead on pure UI and typography. When visuals appear, as suggested by the 'Identity Book Design' content, they are likely confined to product showcases or project portfolios, presenting the work directly without decorative framing. Iconography, if present, would likely be minimal, outlined, and monochromatic, maintaining the severe aesthetic. The system is text-dominant.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Similar focus on minimal design, achromatic palette, and content as the primary visual element. |
| Manual Studio | Uses a stark, almost brutalist typographic approach with a subdued color scheme and emphasis on white space or dark canvases. |
| Superside | Employs a largely monochrome interface with clean typography and minimal visual adornment, prioritizing function over decoration. |
| Read.cv | Features a content-first design with a simple color palette, strong typographic hierarchy, and limited use of decorative elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #1a1a1a
border: #e5e7eb
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a top navigation bar: background Carbon (#1a1a1a). Navigation links are Ghost Border Buttons with Frost (#ffffff) text and Smoke (#e5e7eb) bottom borders, 0px radius, 0px padding. Elements within the nav should be spaced 12px apart.
2. Design a content section header: Background Carbon (#1a1a1a). Text is a single line 'm a k k a i h a n g Identity Book Design' using Frost (#ffffff) and the default Untitled Sans font at 14px size, line-height 1.5.
3. Implement a 'Naked Card' for a project preview: Transparent background, no borders, no shadows, 0px padding and 0px radius. The card's content should use Frost (#ffffff) text for any titles or descriptions.

### Motion Philosophy

The system employs subtle, expressive transitions primarily using 'ease' timing functions. Durations range from 0.1s to 0.8s, with 0.5s being the most common, suggesting a balance between responsiveness and smooth visual feedback. Common effects include 'fadeIn' and 'slideLeaveUp', indicating a preference for elements appearing and disappearing with gentle vertical motion and opacity changes.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512481052-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512481052-thumb.jpg |
