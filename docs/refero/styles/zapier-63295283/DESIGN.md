# Zapier — Refero Style

- Refero URL: https://styles.refero.design/style/63295283-c1a3-4adb-891a-d1365a47a50b
- Site URL: https://zapier.com
- ID: 63295283-c1a3-4adb-891a-d1365a47a50b
- Theme: light
- Industry: saas
- Created: 2026-01-21T13:31:21.000Z
- Ranks: newest: 1295, popular: 328, trending: 544

> Warm parchment paper, gently lit.

## Description

This design system prioritizes a muted, approachable aesthetic with a core palette centered around a soft, almost 'parchment' white and black. Accents of vivid orange provide directional guidance and visual energy without overwhelming the understated neutrals. The use of custom typefaces at distinct weights lends a sophisticated, editorial feel to headlines, counterbalancing the otherwise utilitarian Inter for body copy. The overall effect is one of quiet efficiency, welcoming users with soft tones and clear hierarchies.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Parchment White | #fffefb | neutral | Page backgrounds, card surfaces, primary text on dark elements – this is the foundational canvas, providing a soft, almost tactile base. |
| Ember Orange | #ff4f00 | brand | Primary CTA buttons, active navigation indicators, key icons – a vivid beacon against the muted background, demanding attention for critical actions. |
| Ink Black | #201515 | neutral | Primary text, deep shadows, dark navigation elements – the dominant dark color, offering high contrast and a slightly desaturated feel, preventing harshness. |
| Slate Gray | #36342 | neutral | Secondary text, subtle borders, inactive link states – a softer counterpoint to Ink Black, used for less emphasis. |
| Ash Gray | #413735 | neutral | Tertiary text, less prominent UI elements – further desaturated for lighter informational text. |
| Stone Taupe | #c5c0b1 | neutral | Light borders, dividers, subtle background textures – its near-gray quality blends with a hint of warmth. |
| Soft Off-White | #f8f4f0 | neutral | Alternate background sections, subtle surface differentiation – provides visual breaks without stark contrast. |
| Cool Steel | #2d2e2 | neutral | Specific link colors, subtle UI details – leans slightly cooler than other neutrals, offering a slight variation in tone. |
| Google Red | #ea4335 | accent | Google branding elements – appears only in specific integration iconography, not a general semantic color. |
| Google Green | #34a853 | accent | Google branding elements – appears only in specific integration iconography. |
| Google Blue | #4285f4 | accent | Google branding elements – appears only in specific integration iconography. |
| Google Yellow | #fbbc05 | accent | Google branding elements – appears only in specific integration iconography. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 300, 400, 500, 600, 700 | 12px, 13px, 14px, 15px, 16px, 18px, 20px, 24px, 28px, 32px, 36px, 48px, 160px | 0.90, 1.00, 1.03, 1.04, 1.14, 1.20, 1.25, 1.33, 1.43, 1.50, 1.54, 1.71, 1.72, 2.07 | Used for all general body text, numerical data, navigation items, and buttons. Its wide range of weights and sizes supports dense information display and provides clarity across all UI elements. |
| Degular Display | serif | 500, 600 | 14px, 24px, 30px, 40px, 56px, 80px | 0.90, 1.00, 1.10 | Primary display font for navigation elements and secondary headlines. Its broad, open counters and slight geometric touch lend a modern yet friendly character, signaling key structural information without being overly formal. |
| GT Alpina | serif | 250, 300 | 40px, 48px | 1.08, 1.20 | Exclusively used for prominent page headlines. The extremely light weights (250, 300) combined with negative letter spacing create an elegant, almost whispered authority. This deliberate subtlety differentiates it from typical bold headlines, giving a sophisticated, understated feel to key statements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.71 |  |
| body | 16 | 1.5 |  |
| subheading | 24 | 1.25 | 0.33 |
| heading | 30 | 1.1 |  |
| heading-lg | 40 | 1.2 | -1.6 |
| display | 56 | 1 | 1.68 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "20px",
    "soft": "8px",
    "input": "0px",
    "buttons": "4px",
    "default": "4px"
  },
  "elementGap": "4-16px",
  "sectionGap": "48-80px",
  "cardPadding": "6px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### AI Template Cards



### Banner Notification + Badge Pills



### Primary Action Button

**Role:** Call to action

Filled Ember Orange button with Parchment White text, 4px border-radius. Padding: 12px vertical, 24px horizontal. Text is Inter 600.

### Secondary Ghost Button

**Role:** Secondary action

Transparent background with Slate Gray text and a 1px Slate Gray border, 0px border-radius. Padding: 12px vertical, 16px horizontal. Text is Inter 400.

### Navigation Button

**Role:** Navigation item

Transparent background with Ink Black text. No explicit border, 0px border-radius. Padding: 12px. Text is Degular Display 500.

### Google Auth Button

**Role:** Authentication

Parchment White background with #0000EE blue text, 5px border-radius. Border is Stone Taupe. Padding: 20-24px vertical, 32px horizontal. Text is Inter 600.

### Standard Card

**Role:** Content grouping

Parchment White background, 4px border-radius, no shadow. Padding: 6px.

### Input Field

**Role:** User input

Parchment White background, Ink Black text, a 1px Ink Black border, 0px border-radius. No explicit padding mentioned in data but assumed to be present.

### Banner Notification

**Role:** Announcements

Dark background (#201515) with Parchment White text, 0px border-radius. Border is Slate Gray. Used for site-wide announcements at the top of the page.

### Utility Grid Card

**Role:** UI element wrapper

Transparent background, 0px border-radius, no shadow, no padding explicit. Used for wrapping grid or list items without adding visual weight.

## Do's

- Prioritize Ember Orange (#ff4f00) for all primary calls to action to ensure consistent visual hierarchy and actionability.
- Use Parchment White (#fffefb) as the dominant background, ensuring visual lightness and breathability across all content.
- Apply GT Alpina (weights 250, 300, letter-spacing -0.0400em) exclusively for main page headlines to achieve an understated, sophisticated impact.
- Employ a 4px border-radius for interactive elements like buttons and cards, creating a consistent, subtly rounded aesthetic.
- Maintain a clear contrast ratio by using Ink Black (#201515) for main body text against Parchment White (#fffefb) backgrounds.
- Utilize the 12px vertical and 24px horizontal padding for primary buttons to ensure a comfortable tap target and visual prominence.

## Don'ts

- Avoid using highly saturated colors other than Ember Orange or Google brand accents, to preserve the system's muted aesthetic.
- Do not introduce strong drop shadows; rely on background color changes or subtle borders for element separation.
- Refrain from using GT Alpina for body text or navigation; its delicate weights are reserved for high-impact headlines only.
- Do not deviate from the 4px or 0px border-radius for core interactive components; other radii are for specific functional exceptions.
- Avoid tight line spacing for body text; use Inter's default line heights (e.g., 1.5 for 16px) for optimal readability.
- Do not use generic system fonts when custom fonts are specified; Degular Display and GT Alpina are critical for brand identity.

## Layout

The page model is primarily max-width contained, with a centered content area on a Parchment White background, giving ample whitespace on the margins. The hero section features a centered headline and CTA over the Parchment White background, paired with a prominent abstract 3D graphic. Section rhythm is managed through consistent vertical spacing (large `sectionGap` likely 48-80px), occasionally punctuated by a subtle background color change to Soft Off-White for visual breaks. Content is often arranged in a split-layout (text-left/image-right or vice versa) or stacked, centered blocks. There's clear usage of 3-column card grids for feature showcases, maintaining consistent internal padding and radii. The navigation is a sticky top bar with a logo, left-aligned standard dropdowns, and right-aligned action buttons.

## Imagery

The visual language for imagery is a mix of abstract 3D renderings and contained product screenshots. Abstract graphics feature organic, almost volumetric shapes in desaturated tones with Ember Orange accents, often appearing to 'flow' or 'connect' as a metaphor for automation, sometimes with a subtle rough texture. Product screenshots are typically tightly cropped and displayed within a contained UI frame (like a browser window), focusing on specific workflows or features rather than a full product interface. There's no use of lifestyle photography or raw edge images; all visuals are either conceptual or explanatory, contributing to a sense of sophisticated, technical utility. Icons are primarily monochromatic outlines contrasting with the background, with occasional filled brand-colored icons for Google-related services.

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Similar approach to clean, organizational UI with muted base colors and distinct brand accent colors for interaction. |
| Notion | Employs a white/light background with a focus on clear typography and functional UI elements, using a single accent for interactives. |
| Wrike | Features a light, neutral palette with strategic use of a single vibrant brand color to highlight actions and key information in a workflow tool context. |
| Asana | Combines a soft background with strong, functional typography and a distinct accent color for task management and call-to-actions without visual clutter. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text: #201515 (Ink Black)
- Background: #fffefb (Parchment White)
- CTA: #ff4f00 (Ember Orange)
- Border: #c5c0b1 (Stone Taupe)
- Accent: #ff4f00 (Ember Orange)

**Example Component Prompts:**
1.  Create a Hero section: Parchment White background. Headline 'The automation layer for agentic AI' in GT Alpina 250, 48px, lineHeight 1.08, letterSpacing -1.92px, color Ink Black. Subtext 'One MCP connection. 8,000+ apps.' in Inter 400, 18px, lineHeight 1.5, color Slate Gray. Primary CTA Button: 'Start free with email', Ember Orange background, Parchment White text, 4px radius, 12px vertical 24px horizontal padding. Secondary CTA Button: 'Start free with Google', Parchment White background, #0000EE text, 5px radius, 24px vertical 32px horizontal padding.
2.  Design a Feature Card: Parchment White background, 4px border-radius, no shadow, 6px padding. Title 'AI Workflows' in Inter 600, 20px, Ink Black. Description 'Automate advanced workflows...' in Inter 400, 16px, Slate Gray. Include a small icon aligned top-left. Text for heading should have a 12px bottom margin.
3.  Build a Global Navigation Bar: Ink Black background for the top info banner (#201515, 0px border-radius, Parchment White text, Inter 400, 14px, 12px padding). Main nav on Parchment White background. Logo on left. Navigation links like 'Products', 'Solutions' in Degular Display 500, 16px, Ink Black, 12px padding. Right-aligned 'Log in' link in Ink Black and a 'Sign up' Primary Action Button: Ember Orange background, Parchment White text, 4px radius, 12px vertical 24px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775922857106-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775922857106-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/63295283-c1a3-4adb-891a-d1365a47a50b-1777567781062-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/63295283-c1a3-4adb-891a-d1365a47a50b-1777567781062-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/63295283-c1a3-4adb-891a-d1365a47a50b-1777567781062-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/63295283-c1a3-4adb-891a-d1365a47a50b-1777567781062-preview-detail-poster.jpg |
