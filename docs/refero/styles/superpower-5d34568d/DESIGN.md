# Superpower — Refero Style

- Refero URL: https://styles.refero.design/style/5d34568d-4bdc-445d-a527-c6f5249fa8fb
- Site URL: https://superpower.com
- ID: 5d34568d-4bdc-445d-a527-c6f5249fa8fb
- Theme: light
- Industry: other
- Created: 2026-03-12T15:29:34.000Z
- Ranks: newest: 1047, popular: 227, trending: 232

> Clinical precision, vibrant pulse. A highly legible monochrome foundation with a single, sharp burst of color highlighting interaction.

## Description

Superpower's health intelligence brand is built on a high-contrast palette of an almost-black charcoal and stark white, punctuated by a vivid, energetic vermillion. Monochromatic typography by NB International Pro, paired with generous letter-spacing, projects a precise, almost clinical authority, while pill-shaped buttons introduce a surprising soft, approachable counterpoint. This creates a refined yet dynamic aesthetic, balancing technical exactitude with user-friendly optimism.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Charcoal Black | #18181b | neutral | Primary text, darkest backgrounds, borders, navigation text — defines the core, stark contrast against white surfaces. |
| Pure White | #ffffff | neutral | Page backgrounds, card surfaces, button text — the dominant canvas for content, providing maximum contrast for Charcoal Black text. |
| Warm Gray | #71717a | neutral | Secondary text, subtle borders, subheadings — softens the contrast for less critical information, maintaining legibility. |
| Light Gray | #e4e4e7 | neutral | Tertiary backgrounds, hairline borders, subtle dividers — provides visual separation without introducing strong color. |
| Whisper Gray | #f4f4f5 | neutral | Subtle background shading, hover states for light elements — provides a very slight visual lift from Pure White. |
| Vermillion Accent | #fc5f2b | brand | Primary calls to action, active navigation items, key highlight elements — directs user attention with high-energy contrast against neutral backgrounds. |
| Sunset Gradient | #fc5f2b | brand | Decorative element on membership card, provides a dynamic visual flourish — a warm, vibrant gradient that avoids direct action but conveys energy. |
| Soft Vermillion | #feaf95 | brand | Subtle shadow tint for cards, giving a warm glow to elevated elements. |
| Canary Yellow | #ffdd61 | accent | Background for specific informational elements, likely semantic success or highlight. |
| Sky Blue | #42a5f5 | accent | Iconography, non-interactive graphical elements — a secondary accent color that adds visual interest without competing with Vermillion Accent. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Nb international pro webfont | Inter | 400, 700 | 11px, 13px, 15px, 17px, 19px, 22px, 26px, 30px, 37px, 45px, 56px, 60px, 66px | 1.00, 1.06, 1.10, 1.13, 1.20, 1.25, 1.40, 1.50 | Primary typeface for all content. Weight 700 is reserved for headlines and emphasized elements, conveying directness. Weight 400 for body text and navigation. Distinctive tight letter-spacing for headlines contributes to a crisp, precise feel, loosening for body text to maintain comfort. |
| Nb International mono pro | Space Mono | 400 | 11px, 13px | 1.40, 1.50 | Used for specific functional text, like footnotes or small labels, where a fixed-width character set is desired for technical precision. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 | -0.132 |
| body | 15 | 1.5 | -0.225 |
| subheading | 19 | 1.4 | -0.266 |
| heading-sm | 22 | 1.4 | -0.308 |
| heading | 37 | 1.25 | -0.37 |
| heading-lg | 45 | 1.2 | -0.36 |
| display | 60 | 1.06 | -0.3 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "29.9832px",
    "cards": "16px",
    "inputs": "11.2437px",
    "buttons": "9999px"
  },
  "elementGap": "4px",
  "sectionGap": "64-96px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Pricing Card — Superpower Membership



### Button Group — Primary, Secondary, Ghost



### Stat / Feature Blocks — Health Intelligence



### Primary Call to Action Button

**Role:** Button

Rounded pill shape with Vermillion Accent background (#fc5f2b) and Pure White text (#ffffff). Prominent padding: 15px vertical, 22px horizontal. Ensures primary user actions are highly visible and inviting.

### Secondary Outline Button

**Role:** Button

Pill shape with Pure White background (#ffffff), Charcoal Black text (#18181b), and a Light Gray border (#e4e4e7). Padding is 15px vertical, 19px horizontal. Provides an alternative action without competing with the primary CTA.

### Ghost Button (Dark Background)

**Role:** Button

Pill shape, transparent background (rgba(0,0,0,0.25)), Charcoal Black text (#18181b), no border. Used for tertiary actions or within dark hero sections to provide interaction without strong visual emphasis. Minimal padding due to its transparency.

### Ghost Button (Light Background)

**Role:** Button

Rectangular with rounded corners (11px radius), Whisper Gray background (#fafafa), Charcoal Black text (#18181b). Used for lower-priority actions or filters, blending into the background. Padding is 15px square.

### Default Card

**Role:** Card

Pure White background (#ffffff), 16px border-radius, subtle shadow (rgba(0, 0, 0, 0.05) 0px 2px 2px 0px). Padding: 26px top, 19px horizontal, 19px bottom. Used for content grouping on light backgrounds, providing slight elevation.

### Membership Detail Card

**Role:** Card

Transparent background, 22px border-radius, no shadow, with 19px padding. Used for specific content sections that need a softer visual separation, often containing images or distinct content blocks.

### Image Wrapper Card

**Role:** Card

Transparent background, 5px border-radius, no shadow. Minimum 11px horizontal padding. Used to contain images or media with a slight border-radius, allowing content to dictate visual boundaries.

### Section Navigation Link

**Role:** Navigation

Charcoal Black text (#18181b), 9999px border-radius, transparent background. Used in the main navigation, interactive on hover or click to subtly indicate its function.

### Floating Chat Widget Trigger

**Role:** Button

Square button with 16px radius, Charcoal Black background (#18181B) and Pure White 'S' icon. Positioned fixed at the bottom right, it provides persistent access to support.

## Do's

- Use Charcoal Black (#18181b) for all primary typographic elements and major UI components to maintain high contrast and sophistication.
- Apply Vermillion Accent (#fc5f2b) exclusively to primary calls-to-action and active navigation states to ensure focus and energy.
- Employ the Nb international pro webfont with significant negative letter-spacing for all headlines (e.g., -0.37px at 37px) to achieve a precise, condensed appearance.
- Maintain a clear visual hierarchy by differentiating primary (pill-shaped Vermillion Accent), secondary (white outlined), and tertiary (ghost, transparent) button styles.
- Ensure all interactive elements, particularly buttons, feature a 9999px border-radius for the distinctive pill shape, softening the otherwise crisp UI.
- Use Pure White (#ffffff) as the dominant page background to create an expansive, clean canvas for content presentation.
- Utilize a subtle shadow (rgba(0, 0, 0, 0.05) 0px 2px 2px 0px) for elevated cards on main content areas to provide soft depth.

## Don'ts

- Do not use multiple accent colors simultaneously; the visual system relies on Vermillion Accent (#fc5f2b) for primary emphasis.
- Avoid using flat, square buttons; all primary and secondary buttons must adhere to the 9999px pill-shaped radius.
- Do not introduce strong, chromatic backgrounds other than the defined brand colors; the system heavily relies on a neutral gray progression.
- Refrain from using thin, decorative borders that are not part of the established Light Gray (#e4e4e7) or Charcoal Black (#18181b) border palette.
- Do not vary line-height significantly from the established scale; maintaining the precise vertical rhythm is key for legibility and visual consistency.
- Avoid generic drop shadows; use the specific, subtle card shadow (rgba(0, 0, 0, 0.05) 0px 2px 2px 0px) to maintain a light, clean aesthetic.

## Layout

The site employs a max-width contained layout rather than full-bleed for most content, centered on the screen. The initial hero section is a full-bleed dark photographic background with centered, large white typography, creating an immediate, impactful statement. Subsequent sections primarily feature a clean white background, with content often arranged in two-column layouts (text left, image right, or vice versa), maintaining consistent vertical spacing between sections. Content blocks are visually distinct, often using the defined card styles to group information. A sticky top navigation bar provides consistent access, and a fixed chat widget trigger anchors the bottom right.

## Imagery

The visual language relies heavily on evocative, full-bleed photography, often featuring individuals with determined expressions, implicitly connected to health and vitality. Images typically use shallow depth of field and dramatic lighting (often dark, moody with subtle blue/orange tones) to create an aspirational, slightly mysterious atmosphere. This is offset by clean, tight product shots of membership cards, often with an abstract, organic pattern and rendered with gradients, grounding the aspirational mood in tangible product. Icons are monochromatic, simple, and functional, primarily in Charcoal Black or Pure White, serving a supportive explanatory role.

## Elevation

| Element | Style |
| --- | --- |
| Default Card | rgba(0, 0, 0, 0.05) 0px 2px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Eight Sleep | Both use a primary dark background with a single bright accent color (orange/red) for CTAs and highlights, creating a high-energy, aspirational tech aesthetic. |
| WHOOP | Features clean, high-contrast typography and a restrained color palette, focusing on data and precision in health tech, similar to Superpower's functional elegance. |
| Levels Health | Employs a stark white background with strong, legible typography and targeted use of a single brand accent color, conveying a precise, clinical, yet approachable health technology brand. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text (primary): #18181b
- Background (page): #ffffff
- CTA (Vermillion Accent): #fc5f2b
- Border (light): #e4e4e7
- Secondary Text: #71717a

Example Component Prompts:
1. Create a Primary CTA Button: background #fc5f2b, text #ffffff, border-radius 9999px, padding 14.9916px 22.4874px, text 'Join Today' using Nb international pro webfont weight 700, 17px size, 1.4 line-height, -0.255px letter-spacing.
2. Design a Default Card: background #ffffff, border-radius 16px, box-shadow rgba(0, 0, 0, 0.05) 0px 2px 2px 0px, padding 26.2353px 18.7395px, containing a headline 'Membership' (Nb international pro webfont weight 700, 30px size, #18181b) and body text (Nb international pro webfont weight 400, 15px size, #18181b).
3. Generate a Secondary Outline Button: background #ffffff, text #18181b, border #e4e4e7, border-radius 9999px, padding 14.9916px 18.7395px, text 'Learn More' using Nb international pro webfont weight 400, 15px size, 1.4 line-height, -0.225px letter-spacing.
4. Produce a Hero Section headline: 'Unlock your new health intelligence' using Nb international pro webfont weight 700, 60px size, #ffffff, 1.06 line-height, and -0.3px letter-spacing, centered over a dark photographic background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925845345-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925845345-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d34568d-4bdc-445d-a527-c6f5249fa8fb-1777584131932-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d34568d-4bdc-445d-a527-c6f5249fa8fb-1777584131932-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d34568d-4bdc-445d-a527-c6f5249fa8fb-1777584131932-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d34568d-4bdc-445d-a527-c6f5249fa8fb-1777584131932-preview-detail-poster.jpg |
