# Flayks — Refero Style

- Refero URL: https://styles.refero.design/style/77a193de-2472-4637-802f-d930ec61c180
- Site URL: https://flayks.com
- ID: 77a193de-2472-4637-802f-d930ec61c180
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:14:43.603Z
- Ranks: newest: 198, popular: 924, trending: 860

> Overlapping typographic playground

## Description

Flayks employs a dark, high-contrast, and playfully chaotic visual system. Bold, oversized typography in vivid colors dominates the layout, creating a dense, almost overwhelming textual landscape. Surfaces are predominantly dark, acting as a backdrop for energetic text and accent elements. The system feels dynamic and experimental, with elements often overlapping or being partially obscured, emphasizing a sense of motion and irreverence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Forest | #00381c | brand | Primary background for text elements and sometimes body sections, providing a rich, dark base |
| Coral Punch | #ff8370 | brand | Dominant accent for large headlines, links, and decorative elements, injecting high energy and prominence |
| Lavender Haze | #d1adff | accent | Secondary accent for navigation items, subheadings, and interactive elements, adding a vibrant yet softer highlight |
| Vanilla Beam | #ffe0ce | accent | Gray accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |
| Void Black | #000000 | neutral | Deepest canvas background, primary text, and neutral button borders, foundational for high contrast |
| Charcoal Grey | #272221 | neutral | Secondary surface background, contributing to the dark theme while offering slight differentiation from pure black |
| Slate Surface | #2c2f34 | neutral | Card backgrounds and elevated surfaces, providing a slightly lighter dark tone for layered content |
| Soft Spruce | #546f57 | neutral | Muted background color for specific body sections or decorative blocks, a softer iteration of the green theme |
| Ink Blue | #002a3b | accent | Accent card backgrounds, providing subtle color variation within content blocks |
| Indigo Abyss | #2d0458 | accent | Deep, vivid background for specific card elements, adding a strong color punch |
| Whisper White | #f6e9d9 | neutral | Subtler text color and borders for lower-prominence elements, a very light near-gray |
| Ocean Dream | #55f9ff | accent | Decorative accent for icons and special elements, a vibrant, cool contrast to other brand colors |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Nohemi | Montserrat | 400, 600 | 14px, 18px | 0.85, 1.10, 1.20, 1.35 | Primary body text, navigation elements, and captions. Its tight tracking and varied line heights contribute to the compact, dense feel where even small text has strong presence. |
| Mango Grotesque | Anton | 500, 700 | 32px, 40px, 48px, 88px, 94px, 97px, 144px, 256px, 518px | 0.80, 0.85, 1.00, 1.20 | Primary display headlines and section titles. Its extreme scale and slightly exaggerated letter-spacing create an impactful, editorial presence that is a core part of the brand's visual identity. |
| Arial | Inter | 400 | 13px | 1.20 | Used for utility text, small buttons, and iconic labels where legibility and functional clarity are paramount. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.2 |  |
| body-lg | 18 | 1.2 | 1.8 |
| heading-sm | 32 | 1 | 4.8 |
| heading | 40 | 0.85 | 8 |
| heading-lg | 48 | 0.85 | 12 |
| display | 518 | 0.8 | 129.5 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "buttons": "900px",
    "general": "6px",
    "largeElements": "10px"
  },
  "elementGap": "4px",
  "sectionGap": "29px",
  "cardPadding": "16px",
  "pageMaxWidth": "1800px"
}
```

## Components

### Ghost Text Button

**Role:** Interactive element for navigation and actions within content.

Transparent background, text color typically #000000 or #ffe0ce, with no explicit padding or border radius. Interactivity is conveyed through hover states or implicit context.

### Outlined Accent Button

**Role:** Secondary action or navigational links where visual hierarchy needs to be present but not dominant.

Transparent background, border color #ffe0ce, text color #ffe0ce, 900px border radius (pill shape). No explicit padding given the data focuses on minimal buttons.

### Standard Card

**Role:** Group related content, such as project entries or information blocks.

Background color #2c2f34, 6px border radius, no box shadow by default. Features 16px horizontal padding and 12px vertical padding.

### Elevated Card

**Role:** Highlight key content or projects with a subtle sense of depth.

Background color #2c2f34, 10px border radius, with a compound shadow: rgba(0, 0, 0, 0.01) 21px 44px 20px 0px, rgba(0, 0, 0, 0.05) 12px 25px 17px 0px, rgba(0, 0, 0, 0.09) 5px 11px 12px 0px, rgba(0, 0, 0, 0.1) 1px 3px 7px 0px. No explicit padding.

### Dark Accent Card

**Role:** Visually distinct content blocks, often used for project showcases with specific visual themes.

Background color from a range of #2d0458, #1e1779, #977eac, #002a3b. 10px border radius. No shadows.

## Do's

- Prioritize legibility for all text over pure aesthetic, especially with overlapping graphic elements.
- Use Mango Grotesque for all display-level headings (32px-518px), varying weight and size to create visual hierarchy and impact.
- Employ Deep Forest (#00381c) as a foundational dark background for sections that need maximum brand presence.
- Utilize Coral Punch (#ff8370) and Lavender Haze (#d1adff) as primary and secondary accents for headings and interactive elements.
- Implement the 900px border radius for all interactive buttons and tags to maintain the distinct pill-shape.
- Maintain a clear distinction between the Charcoal Grey (#272221) secondary background and Slate Surface (#2c2f34) card backgrounds to establish subtle layering.
- Ensure the Vanilla Beam (#ffe0ce) outlined button is used for primary actions to provide a consistent interactive cue.

## Don'ts

- Avoid using light backgrounds. The system is fundamentally dark-themed.
- Do not introduce new typefaces. Limit typography to Nohemi, Mango Grotesque, and Arial.
- Do not deviate from the defined color palette; new colors will disrupt the high-contrast aesthetic.
- Avoid generic rectangular buttons; all buttons should have a 900px border radius for visual identity.
- Do not over-use box shadows; reserve them for specific elevated card variants to maintain their impact.
- Do not apply large, standard padding to components. The system favors compact and sometimes edge-to-edge content.
- Avoid excessive spacing between elements; the design emphasizes density and overlapping visuals.

## Layout

The page uses a maximum width of 1800px, but elements frequently break out of this constraint for visual impact, especially large typographic elements. The hero section is full-bleed, dominated by oversized, dynamically positioned text, creating a strong editorial and art-director aesthetic. Section rhythm is less about alternating bands and more about distinct content blocks that sometimes overlap or appear dynamically placed. Content arrangement is often asymmetrical, balancing large text blocks with project cards or abstract visuals. There's a preference for dynamic visual composition over strict grid alignment, although project showcases might adopt a looser card grid. The overall density is high, with visual elements competing for attention, contributing to a maximalist feel. Navigation is minimal, often relegated to small contextual links or a sticky header.

## Imagery

Imagery on Flayks is primarily abstract and graphical, often incorporating digital art, geometric shapes, and stylized 3D renders. Photography, when present, is usually high contrast or desaturated, integrated into these graphic compositions rather than standalone. Images are frequently overlapped, masked, or have raw edges, contributing to the chaotic and energetic feel. Icons are typically outlined and monochromatic but can adopt brand accent colors like Ocean Dream, with a medium stroke weight. The imagery serves a decorative atmospheric purpose, enhancing the artistic and experimental brand identity.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.01) 21px 44px 20px 0px, rgba(0, 0, 0, 0.05) 12px 25px 17px 0px, rgba(0, 0, 0, 0.09) 5px 11px 12px 0px, rgba(0, 0, 0, 0.1) 1px 3px 7px 0px |
| Deep Elevated Card | rgba(0, 0, 0, 0.01) 0px 62px 25px 0px, rgba(0, 0, 0, 0.05) 0px 35px 21px 0px, rgba(0, 0, 0, 0.09) 0px 16px 16px 0px, rgba(0, 0, 0, 0.1) 0px 4px 9px 0px |
| Max Elevated Card | rgba(0, 0, 0, 0.01) 0px 262px 105px 0px, rgba(0, 0, 0, 0.05) 0px 148px 89px 0px, rgba(0, 0, 0, 0.09) 0px 66px 66px 0px, rgba(0, 0, 0, 0.1) 0px 16px 36px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Huge Inc. | Shares a maximalist typographic approach with large, impactful headlines and a strong editorial feel. |
| Active Theory | Exhibits a similar experimental, high-contrast dark theme with dynamic layouts and unexpected element placement. |
| Readymag | Features bold, often overlapping typography and a modern, design-focused aesthetic suitable for portfolios. |
| Locomotive Agency | Employs dark backgrounds and prominent, creative typography for an avant-garde digital design presence. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000
background: #000000
border: #ffe0ce
accent: #ff8370
primary action: #ffe0ce (outlined action border)

### 3-5 Example Component Prompts
1. Create a primary headline: 'Digital Designer' using Mango Grotesque weight 700 at 518px, color #ff8370, letter-spacing 129.5px, line-height 0.8.
2. Create a ghost navigation link: 'Contact' using Nohemi weight 400 at 14px, color #ffe0ce, letter-spacing 1.4px, on a #000000 background.
3. Create an outlined pill button: 'View Project' with a 900px border radius, border color #ffe0ce, text color #ffe0ce, using Nohemi weight 400 at 14px. Background is transparent.
4. Create a Standard Card: background #2c2f34, 6px border radius, 16px horizontal padding and 12px vertical padding. Inside, place a title using Nohemi weight 600 at 18px, color #ffe0ce.
5. Create an Elevated Card: background #2c2f34, 10px border radius, box-shadow rgba(0, 0, 0, 0.01) 21px 44px 20px 0px, rgba(0, 0, 0, 0.05) 12px 25px 17px 0px, rgba(0, 0, 0, 0.09) 5px 11px 12px 0px, rgba(0, 0, 0, 0.1) 1px 3px 7px 0px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518856835-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518856835-thumb.jpg |
