# Magda Reyman — Refero Style

- Refero URL: https://styles.refero.design/style/d60499c7-9e48-4bdf-8194-c168bb274c9e
- Site URL: https://magdareyman.com
- ID: d60499c7-9e48-4bdf-8194-c168bb274c9e
- Theme: light
- Industry: design
- Created: 2026-04-30T03:18:04.130Z
- Ranks: newest: 186, popular: 1293, trending: 1295

> High-contrast digital notebook.

## Description

Magda Reyman's design system evokes a minimalist, high-contrast digital notebook. Typography is the primary visual element, eschewing colorful branding for stark black and white text against a soft, light gray canvas. Layout prioritizes clarity and directness, with a strong emphasis on content over decorative elements. Visual weight comes from precise typographic choices and close-cropped product imagery within iPhone mockups, suggesting a focus on functional, UI-centric design.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Fog | #c0c0c0 | neutral | Primary page background, neutral base |
| Surface Frost | #ffffff | neutral | Card backgrounds, elevated surface treatments within the UI |
| Text Charcoal | #090909 | neutral | Primary body text, link text, strong headings. Creates strong contrast against light backgrounds |
| Text Graphite | #282828 | neutral | Secondary text, subtle details, and borders |
| Text Ink | #000000 | neutral | Bold text and high-emphasis elements, typically used sparingly for maximum impact |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| custom_30190 |  | 400, 700 | 8px, 24px, 40px | 1.00, 1.25, 1.58 | Headings, body text, and links. The consistent tracking across sizes is a signature choice creating a technical, precise feel. Exact substitute unknown without brand guidance. |
| -apple-system | System Font | 400 | 16px | 1.00 | Secondary short text and utility information. |
| Inter | Inter | 400 | 18px | 1.67 | Paragraph text for readability on longer blocks. |
| custom_351 |  | 400 | 24px | 1.25 | Specific heading elements. Exact substitute unknown without brand guidance. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "other_elements": "32px",
    "elements_circular": "162px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Rectangular Card

**Role:** Content container.

Background is Surface Frost (#ffffff) with 0px border-radius and no shadow. No intrinsic padding, content defines internal spacing.

### Circular Element

**Role:** Decorative or functional elements with extreme curvature.

Uses a 162px border-radius, often with transparent background (rgba(9, 9, 9, 0)) and no shadow, allowing elements to appear as if 'ghosted' or purely textual.

## Do's

- Prioritize text as the primary visual communication tool, using Text Charcoal (#090909) on Surface Frost (#ffffff) or Canvas Fog (#c0c0c0) for high contrast.
- Use a 0px border-radius for main content cards and containers to maintain a sharp, angular aesthetic.
- Apply 162px border-radius to create distinctly circular or pill-shaped decorative elements for contrast.
- Maintain a compact density, allowing typography to breathe without excessive white space around text blocks; use 1px or 16px vertical padding where defined.
- Utilize 'custom_30190' with its precise 0.0250em letter-spacing for all headings and emphasis to establish a consistent, technical tone.
- Keep backgrounds and surfaces in the achromatic neutral palette (Canvas Fog, Surface Frost) to keep the focus on content and typography.
- Ensure all text, especially links, is in Text Charcoal (#090909) for optimal readability and a consistent dark-on-light appearance.

## Don'ts

- Do not introduce color into primary UI elements such as backgrounds, buttons, or navigation; reserve color strictly for content if at all.
- Avoid decorative shadows or complex gradients on UI components; elevation is achieved through distinct color surfaces or sharp typographic hierarchy.
- Do not use generic system fonts for prominent headings or body text where a custom font is specified; the precise letter-spacing of 'custom_30190' is key.
- Refrain from varying border-radius widely; stick to 0px for main containers and 162px for specialty circular elements.
- Do not embed imagery haphazardly; product screenshots should be tightly contained and presented cleanly, as seen in the iPhone mockups.
- Avoid large, sparse sections; content should feel intentional and dense, with tight vertical rhythm.
- Do not use multiple font families for similar purposes; the typographic system is minimal and direct.

## Layout

The page uses a full-bleed model without a defined `pageMaxWidth`, creating expansive, content-first sections. The hero section features centered, strong typographic statements on the light gray background. Content often arranges in alternating text and visual blocks, with text-dominant areas and specific product displays embedded within the flow. Vertical spacing is consistent but compact, focusing on direct communication rather than spacious visual breaks. Navigation is a minimal top bar.

## Imagery

Imagery consists primarily of clean, contained product screenshots (specifically, app interfaces within iPhone mockups) without external context or lifestyle elements. They are used as illustrative content, not decorative atmosphere, and are tightly integrated into the UI. Icons are typically solid and monochromatic, used functionally.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards-featured portfolio sites | High-contrast typography-driven aesthetic with minimal color and sharp, deliberate layout choices. |
| Linear | Emphasis on sharp lines, high contrast, and a lack of decorative flourish, prioritizing functional clarity. |
| Stripe (early branding) | Clean, technical aesthetic with strong typography and controlled use of visual hierarchy without complex gradients or shadows. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #090909
background: #c0c0c0
border: #282828
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
Create a section with a main heading 'Projects' using custom_30190 weight 400 at 40px, Text Charcoal (#090909), letter-spacing 0.0250em. Below it, add a body text '(↑Projects)' using custom_30190 weight 400 at 24px, Text Graphite (#282828), letter-spacing 0.0250em.

Create a card component: background Surface Frost (#ffffff), 0px border-radius, no shadow. Inside, add a text element 'Bridging the gap between branding & user interface' using custom_30190 weight 400 at 24px, Text Charcoal (#090909), letter-spacing 0.0250em.

Design a footer navigation link 'CONTACT@MAGDAREYMAN.COM': text in -apple-system weight 400 at 16px, Text Graphite (#282828), normal letter-spacing, with a 1px bottom padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519066872-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519066872-thumb.jpg |
